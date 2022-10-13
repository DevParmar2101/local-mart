<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\StoreCategory $model */

$this->title = 'Update Store Category: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Store Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="store-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
