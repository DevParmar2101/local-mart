<?php

namespace frontend\controllers;

use yii\web\Controller;

class ProfileController extends Controller
{
    /**
     * @return string
     */
    public function actionAccount(): string
    {
        return $this->render('account');
    }

}