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
                        'actions' => ['login', 'error', 'signup', 'index', 'create', 'image'],
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
    public function actionImage($id)
    {
        $this->layout = $this->seller_dashboard_layout;

        $path = ProductImage::getPath();
        $old_images = null;
        if (!is_dir($path)) {
            FileHelper::createDirectory($path,$mode = 0777, $recursive = true);
        }

        $model = Product::findOne(['uuid' => $id]);
        $model->scenario = $model::IMAGE;

        if ($model->load(Yii::$app->request->post())) {
            $model->product_image = UploadedFile::getInstances($model,'product_image');

            if ($model->product_image) {
                foreach ($model->product_image as $image) {
                    if ($image) {
                        $model->product_image = $model->getImageName($image);
                    } else {
                        $model->product_image = $old_images;
                    }
                    $save_image = new ProductImage;
                    $save_image->product_id = $model->id;
                    $save_image->image = $model->getImageName($image);

                    if ($save_image->save())
                    {
                        $image->saveAs(ProductImage::getPath($save_image->image));
                    }
                }
            }
            if ($model->save()) {
                Yii::$app->session->setFlash('success','Image Uploaded Successfully!');
                return $this->redirect(['index']);
            }

        }
        return $this->render('image',[
            'model' => $model,
        ]);
    }
}