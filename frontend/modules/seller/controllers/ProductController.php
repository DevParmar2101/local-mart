<?php

namespace frontend\modules\seller\controllers;

use common\models\Product;
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
                        'actions' => ['login', 'error', 'signup', 'index', 'create'],
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
        return $this->render('create',[
            'model' => $model
        ]);
    }
}