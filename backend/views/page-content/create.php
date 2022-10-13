<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PageContent $model */

$this->title = 'Create Page Content';
$this->params['breadcrumbs'][] = ['label' => 'Page Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
