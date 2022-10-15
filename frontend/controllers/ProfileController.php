<?php

namespace frontend\controllers;

use common\models\User;
use Yii;
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
     * @return string|Response
     */
    public function actionChangePassword()
    {
        $model = User::findOne(['id' => \Yii::$app->user->identity->id]);
        $model->scenario = $model::SCENARIO_CHANGE_PASSWORD;
        if (!$model){
            return  $this->redirect('login');
        }
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->setPassword($model->new_password);
            if ($model->save(false)) {
                return $this->refresh();
            }
            return $this->refresh();
        }
        return $this->render('change-password',[
            'model' => $model,
        ]);
    }

    /**
     * @return string
     */
    public function actionWishlist(): string
    {
        return $this->render('wishlist');
    }

    /**
     * @return string
     */
    public function actionOrder(): string
    {
        return $this->render('order');
    }

}