<?php

namespace frontend\controllers;

use common\models\Product;
use yii\web\Controller;

class ProductController extends Controller
{

    public function actionIndex($uuid)
    {
        $model = Product::findOne(['uuid' => $uuid]);

        return $this->render('index',[
            'model' => $model,
        ]);
    }
}