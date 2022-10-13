<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\StoreSubCategory $model */

$this->title = 'Create Store Sub Category';
$this->params['breadcrumbs'][] = ['label' => 'Store Sub Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-sub-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>