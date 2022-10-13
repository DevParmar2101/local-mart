<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\PageContent $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Page Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h5 class="mb-0"><?= Html::encode($this->title)?></h5>
        </div>
        <hr/>
        <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back',['/page-content'], ['class' => 'btn btn-outline-warning'])?>

        </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'sub_title',
            [
                    'attribute' => 'content',
                    'format' => 'raw'
            ],
            'order_by',
            [
                    'attribute' => 'use_for',
                    'value' => function ($model) {
                        return $model->getUseFor($model->use_for);
                    }
            ],
            [
                    'attribute' => 'status',
                    'value' => function ($model) {
                        return $model->getStatus($model->status);
                    }
            ],
            [
                    'attribute' => 'user_id',
                    'value' => Yii::$app->user->identity->username,
            ],
        ],
    ]) ?>
    </div>
</div>
