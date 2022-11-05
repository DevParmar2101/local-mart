<?php

namespace frontend\modules\seller\controllers;

use common\models\Product;
use common\models\UserStore;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

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
        $model = Product::find()
            ->where(['uuid' => $id])
            ->one();
        return $this->render('image',[
            'model' => $model,
        ]);
    }
}