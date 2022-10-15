<?php

namespace frontend\controllers;

use common\models\User;
use yii\web\Controller;

class ProfileController extends Controller
{
    /**
     * @return string
     */
    public function actionAccount(): string
    {
        $user_id = \Yii::$app->user->identity->id;
        $model = User::findOne($user_id);
        return $this->render('account');
    }

}