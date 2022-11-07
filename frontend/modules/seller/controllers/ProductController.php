<?php

namespace frontend\modules\seller\controllers;

use common\models\Product;
use common\models\ProductImage;
use common\models\UserStore;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\UploadedFile;

class ProductController extends Controller
{
    /**
     * @var string
     */
    public string $seller_dashboard_layout = '@frontend/views/layouts/seller-dashboard/main';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'signup', 'index', 'create', 'image', 'edit'],
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

        $id = Yii::$app->user->identity->id;
        $model = Product::find()->where(['user_id'=> $id])->all();

        return $this->render('index',[
            'model' => $model
        ]);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $this->layout = $this->seller_dashboard_layout;
        $model = new Product;
        $store = UserStore::findOne(['uuid' => Yii::$app->session->get('store_uuid')]);
        if ($model->load(Yii::$app->request->post())) {
            $model->store_id = $store->id;
            $model->user_id = Yii::$app->user->identity->id;
            $model->status = $model::UNDER_REVIEW;
            $model->created_at = date('Y-m-d');
            if ($model->save()){
                Yii::$app->session->setFlash('success','New product created!');
                return $this->redirect(['product/index']);
            }
        }
        return $this->render('create',[
            'model' => $model
        ]);
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws \yii\base\Exception
     */
    public function actionEdit($id)
    {
        $this->layout = $this->seller_dashboard_layout;
        $model = Product::findOne(['uuid' => $id]);
        $path = Product::getPath();
        if (!is_dir($path)) {
            FileHelper::createDirectory($path, $mode = 0777, $recursive = true);
        }
        $old_thumbnail = null;

        if ($model->thumbnail_image) {
            $old_thumbnail = $model->thumbnail_image;
        }

        if ($this->request->isPost)
        {
            if ($model->load(Yii::$app->request->post()))
            {
                $thumbnail = UploadedFile::getInstance($model,'thumbnail_image');

                if ($thumbnail) {
                    $model->thumbnail_image = $model->getImageName($thumbnail);
                }else{
                    $model->thumbnail_image = $old_thumbnail;
                }

                if ($model->save()) {
                    if ($thumbnail) {
                        $thumbnail->saveAs(Product::getPath($model->thumbnail_image));
                    }
                    return $this->redirect(['index']);
                }else{
                    echo '<pre>';
                    print_r($model->errors);
                    die();
                }
            }
        }
        return $this->render('create',[
            'model' => $model
        ]);
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws \yii\base\Exception
     */
    public function actionImage($id)
    {
        $this->layout = $this->seller_dashboard_layout;

        $path = ProductImage::getPath();
        $old_images = null;
        if (!is_dir($path)) {
            FileHelper::createDirectory($path,$mode = 0777, $recursive = true);
        }

        $model = Product::findOne(['uuid' => $id]);
        $model_image = new ProductImage;
        $array_of_image = ProductImage::find()->where(['product_id' => $model->id])->all();

        if ($model_image->load(Yii::$app->request->post())) {
            $model_image->image = UploadedFile::getInstances($model_image,'image');

            if ($model_image->image && $model_image->validate(false)) {
                foreach ($model_image->image as $image) {
                    if ($image) {
                        $model_image->image = $model_image->getImageName($image);
                    } else {
                        $model_image->image = $old_images;
                    }
                    $save_image = new ProductImage;
                    $save_image->product_id = $model->id;
                    $save_image->image = $model_image->getImageName($image);

                    if ($save_image->save())
                    {
                        $image->saveAs(ProductImage::getPath($save_image->image));
                    }
                }
            }
                Yii::$app->session->setFlash('success','Image Uploaded Successfully!');
                return $this->redirect(['index']);
        }
        return $this->render('image',[
            'model' => $model,
            'model_image' => $model_image,
            'array_of_image' => $array_of_image,
        ]);
    }
}