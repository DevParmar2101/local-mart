<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\StoreSubCategory $model */

$this->title = 'Update Store Sub Category: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Store Sub Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="store-sub-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
