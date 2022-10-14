<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\StoreSubCategory $model */

$this->title = $model->sub_category;
$this->params['breadcrumbs'][] = ['label' => 'Store Sub Categories', 'url' => ['index']];
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
        <?= Html::a('Back',['/store-sub-category'], ['class' => 'btn btn-outline-warning'])?>
        </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                    'attribute' => 'category_name',
                    'value' => function ($model) {
                        return $model->getCategoryName($model->category_name);
                    }
            ],
            'sub_category',
            [
                    'attribute' => 'user_id',
                    'value' => function ($model) {
                        $user = \common\models\User::findOne(['id' => $model->user_id]);
                        return $user->username;
                    },
            ],
            [
                    'attribute' => 'status',
                    'value' => function ($model) {
                        return $model->getStatus($model->status);
                    }
            ],
        ],
    ]) ?>
    </div>
</div>