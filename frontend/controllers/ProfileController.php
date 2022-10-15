<?php

namespace frontend\controllers;

use common\models\User;
use yii\web\Controller;
use yii\web\Response;

class ProfileController extends Controller
{
    /**
     * @return string|Response
     */
    public function actionAccount()
    {
        $user_id = \Yii::$app->user->identity->id;
        $model = User::findOne($user_id);

        if ($this->request->isPost) {
            if ($model->load(\Yii::$app->request->post()) && $model->save()) {
                \Yii::$app->session->setFlash('success','Profile Updated Successfully !');
                return $this->refresh();
            }
        }
        return $this->render('account',[
            'model' => $model,
        ]);
    }

    /**
     * @return string
     */
    public function actionChangePassword(): string
    {
        return $this->render('change-password');
    }

}