<?php

namespace frontend\controllers;

use common\models\Product;
use common\models\ProductImage;
use yii\web\Controller;

class ProductController extends Controller
{

    public function actionIndex($uuid)
    {
        $model = Product::findOne(['uuid' => $uuid]);
        $product_image = ProductImage::find()->where(['product_id' => $model->id])->all();
        $products = Product::find()
            ->where(['category' => $model->category])
            ->andWhere(['not in',Product::tableName().'.id',[$model->id]])
            ->all();
        return $this->render('index',[
            'model' => $model,
            'product_image' => $product_image,
            'products' => $products,
        ]);
    }
}