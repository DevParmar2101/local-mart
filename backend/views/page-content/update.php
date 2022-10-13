<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PageContent $model */

$this->title = 'Update Page Content: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Page Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
        <hr/>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
