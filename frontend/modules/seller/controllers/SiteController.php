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
                        'actions' => ['login', 'error', 'signup', 'index'],
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

    public function actionIndex()
    {
        $this->layout = $this->seller_dashboard_layout;
        $user_id = \Yii::$app->user->identity->id;
        $model = UserStore::find()->where(['user_id' => $user_id])->all();

        return $this->render('index',[
            'model' => $model
        ]);
    }
}