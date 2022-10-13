<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\StoreCategory $model */

$this->title = 'Create Store Category';
$this->params['breadcrumbs'][] = ['label' => 'Store Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
