<?php

namespace frontend\controllers;

use common\models\BaseActiveRecord;
use common\models\Cities;
use common\models\ExtraPageContent;
use common\models\Product;
use common\models\StoreSubCategory;
use common\models\User;
use common\models\UserStore;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;
use Yii;
use yii\base\Exception;
use yii\base\InvalidArgumentException;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                    'send-otp' => ['post']
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $banner_content = ExtraPageContent::find()
            ->where(['use_for' => ExtraPageContent::HOMEPAGE_BANNER])
            ->andWhere(['status' => BaseActiveRecord::ACTIVE])
            ->all();

        $sub_categories = StoreSubCategory::find()
            ->where(['is_featured' => BaseActiveRecord::ACTIVE ])
            ->all();

        $products = Product::find()
            ->where(['status' => Product::STATUS_PUBLISHED])
            ->andWhere(['=','created_at', date('Y-m-d')])
            ->one();

        echo '<pre>';
        print_r($products);
        die();

        return $this->render('index',[
            'banner_content' => $banner_content,
            'sub_categories' => $sub_categories,
            'products' => $products
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $this->layout = 'blank';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     * @throws \Exception
     */
    public function actionSignup()
    {
        $this->layout = 'blank';
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(['verify-number']);
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $this->layout = 'blank';
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    /**
     * @return string|Response
     * @throws Exception
     */
    public function actionSeller()
    {
        $model = UserStore::findOne(['user_id' => Yii::$app->user->identity->id]);
        if (!$model) {
            $model = new UserStore();
        }

        $path = UserStore::getPath();
        if (!is_dir($path)) {
            FileHelper::createDirectory($path,$mode = 0777, $recursive = true);
        }
        $old_image = null;

        if ($model->profile_image) {
            $old_image = $model->profile_image;
        }

        if ($this->request->isPost) {
            if ($model->load(Yii::$app->request->post())) {
                $image = UploadedFile::getInstance($model,'profile_image');

                if ($image) {
                    $model->profile_image = $model->getImageName($image);
                }else{
                    $model->profile_image = $old_image;
                }
                $model->user_id = Yii::$app->user->identity->id;
                $model->is_number_verified = $model::NOT_VERIFIED;
                $model->uuid = Yii::$app->security->generateRandomString();
                if ($model->save())
                {
                    if ($image) {
                        $image->saveAs(UserStore::getPath($model->profile_image));
                    }

                    Yii::$app->session->setFlash('success','Document Upload Successfully !');
                    return  $this->redirect(['index']);
                }else{
                    echo '<pre>';
                    print_r($model->firstErrors);
                    die();
                }
            }
        }
        return $this->render('seller',[
            'model' => $model
        ]);
    }


    public function actionVerifyNumber()
    {
        $this->layout = 'blank';
        $user_id = Yii::$app->session->get('user_id');
        $model = User::findOne($user_id);
        $model->scenario = $model::VERIFY_NUMBER;
        $otp = $model->otp;
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = 'json';
            $model->load(Yii::$app->request->post());
            if ($otp) {
                $response = [
                    'success' => true,
                    'msg' => 'Number Verified!'
                ];
            }else{
                $error = implode(", ", ArrayHelper::getColumn($model->errors, 0, false)); // Model's Errors string
                $response = [
                    'success' => false,
                    'msg' => 'dev parmar'
                ];
            }
            return $response;
        }
        return $this->render('verify_number',[
            'model' => $model,
        ]);
    }

    /**
     * @return array
     */
    public function actionSendOtp(): array
    {
        $user_id = Yii::$app->session->get('user_id');
        $phone = Yii::$app->request->post('phone');
        Yii::$app->response->format = 'json';
        $response = [];
        if ($phone) {
            $user = User::findOne($user_id);
            $otp = rand(100000,999999);
            $user->contact_number = $phone;
            $user->created_at = time();
            $user->otp = "$otp";
            $user->otp_expire = time() + 600;
            if (! $user->save()) {
                $errorString = implode(",",ArrayHelper::getColumn($user->errors, 0, false));
                $response = [
                    'success' => false,
                    'msg' => $errorString
                ];
            } else {
                $msg = 'One Time Password(OTP) is ' . $otp;

                $sid = Yii::$app->global->twilio_account_sid;
                $token = Yii::$app->global->twilio_auth_token;
                $twilioNumber = Yii::$app->global->twilio_phone_number;
                try {

                    $client = new Client($sid, $token);
                    $client->messages->create('+91'.$phone, [
                        'from' => $twilioNumber,
                        'body' => $msg,
                    ]);

                    $response = [
                        'success' => false,
                        'msg' => 'OTP Sent and valid for 10 minutes.'
                    ];
                }catch (\Exception $e){
                    $response = [
                        'success' => false,
                        'msg' => $e->getMessage()
                    ];
                }
            }
        }else{
            $response = [
                'success' => false,
                'msg' => 'Phone number is empty.'
            ];
        }
        return $response;
    }

    /**
     * @param $id
     * @return void
     */
    public function actionCityList($id)
    {
        $countModel = Cities::find()->where(['state_id' => $id])->count();

        $model = Cities::find()->where(['state_id' => $id])->orderBy(['id' => SORT_DESC])->all();

        $data = [];

        if ($countModel > 0){
            foreach ($model as $key) {
                /** @var $key Cities*/
                $data[$key->id] = $key->city;
            }
            asort($data);
            echo "<option></option>";
            foreach ($data as $key => $val){
                if (!empty($val)) {
                    echo "<option value='".$key."'>".$val."</option>";
                }
            }
        }
        else{
            echo "<option></option>";
        }
    }

}
