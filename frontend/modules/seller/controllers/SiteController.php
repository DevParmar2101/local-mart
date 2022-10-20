<?php

namespace frontend\modules\seller\controllers;

use common\models\UserStore;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

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
                        'actions' => ['login', 'error', 'signup', 'index', 'shop-list'],
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

        return $this->render('index');
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

    public function actionEdit($id)
    {
        $model = UserStore::find()->where(['id' => $id])->one();

        return $this->render('edit',[
            'model' => $model
        ]);
    }

    public function actionDocument($id)
    {
        $model = UserStore::find()->where(['id' => $id])->one();

        return $this->render('document',[
            'model' => $model
        ]);
    }
}