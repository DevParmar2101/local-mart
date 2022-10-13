<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\StoreCategory $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Store Categories', 'url' => ['index']];
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
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back',['/store-category'], ['class' => 'btn btn-outline-warning'])?>
        </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_name',
            'user_id',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>
    </div>
</div>
