<?php

namespace frontend\modules\seller\controllers;

use common\models\BaseActiveRecord;
use common\models\Product;
use common\models\StoreSubCategory;
use common\models\UserStore;
use Yii;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;

class SiteController extends Controller
{

    /**
     * @var string
     */
     public string $seller_dashboard_layout = '@frontend/views/layouts/seller-dashboard/main';

     /**
     * @return array[]
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'signup', 'index', 'shop-list', 'edit', 'document', 'sub-category-list'],
                        'allow' => true,
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @return \string[][]
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    /**
     * @return string
     */
    public function actionIndex(): string
    {
        $this->layout = $this->seller_dashboard_layout;
        $model = UserStore::find()->where(['user_id' => Yii::$app->user->identity->id])->one();

        return $this->render('index',[
            'model' => $model
        ]);
    }

    /**
     * @return string
     */
    public function actionShopList(): string
    {
        $this->layout = $this->seller_dashboard_layout;
        $user_id = \Yii::$app->user->identity->id;
        $model = UserStore::find()->where(['user_id' => $user_id])->all();

        return $this->render('shop-list',[
            'model' => $model
        ]);
    }

    /**
     * @param $id
     * @return string|Response
     */
    public function actionEdit($id)
    {
        $this->layout = $this->seller_dashboard_layout;

        $model = UserStore::find()->where(['id' => $id])->one();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                if ($model->save()) {
                    Yii::$app->session->setFlash('success','Store Updated Successfully !');
                    return $this->refresh();
                }
            }
        }
        return $this->render('edit',[
            'model' => $model
        ]);
    }

    /**
     * @param $id
     * @return string|Response
     * @throws Exception
     */
    public function actionDocument($id)
    {
        $this->layout = $this->seller_dashboard_layout;
        $model = UserStore::findOne($id);
        $model->scenario = $model::DOCUMENT;
        $path = UserStore::getPath();
        if (!is_dir($path)) {
            FileHelper::createDirectory($path,$mode = 0777,$recursive = true);
        }
        $old_document_one = null;
        $old_document_two = null;

        if ($model->document_one) {
            $old_document_one = $model->document_one;
        }

        if ($model->document_two) {
            $old_document_two = $model->document_two;
        }

        if ($this->request->isPost && $model->load(Yii::$app->request->post()))
        {
            $document_one = UploadedFile::getInstance($model,'document_one');
            $document_two = UploadedFile::getInstance($model,'document_two');

            if ($document_one) {
                $model->document_one = $model->getImageName($document_one);
            }else{
                $model->document_one = $old_document_one;
            }

            if ($document_two) {
                $model->document_two = $model->getImageName($document_two);
            }else{
                $model->document_two = $old_document_two;
            }

            if ($model->save(false)) {
                if ($document_one) {
                    $document_one->saveAs(UserStore::getPath($model->document_one));
                }

                if ($document_two) {
                    $document_two->saveAs(UserStore::getPath($model->document_two));
                }

                Yii::$app->session->setFlash('success','Document Upload Successfully !');
                return  $this->redirect(['shop-list']);
            }
        }

       return $this->render('document',[
           'model' => $model
       ]);
    }
    public function actionSubCategoryList($id)
    {
        $countModel = StoreSubCategory::find()->where(['status' => BaseActiveRecord::ACTIVE])->count();

        $model = StoreSubCategory::find()->where(['status' => BaseActiveRecord::ACTIVE])->andWhere(['category_name'=> $id])->orderBy(['id' => SORT_DESC])->all();
        $data = [];

        if ($countModel > 0) {
            foreach ($model as $key) {
                /* @var $key StoreSubCategory*/
                $data[$key->id] = $key->sub_category;
            }
            asort($data);
            echo "<option></option>";
            foreach ($data as $key=>$val) {
                if (!empty($val)) {
                    echo "<option value'".$key."'>".$val."</option>";
                }
            }
        }
        else{
            echo "<option></option>";
        }
    }

}