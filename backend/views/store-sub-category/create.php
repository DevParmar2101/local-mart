<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\StoreSubCategory $model */

$this->title = 'Create Store Sub Category';
$this->params['breadcrumbs'][] = ['label' => 'Store Sub Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
        <hr/>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
</div>
