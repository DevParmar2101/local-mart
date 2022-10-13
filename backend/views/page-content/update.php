<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PageContent $model */

$this->title = 'Update Page Content: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Page Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
