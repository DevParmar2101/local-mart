<?php

use common\models\StoreCategory;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\StoreCategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Store Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">
        <div class="d-lg-flex align-items-center mb-4 gap-3">
            <div class="ms-auto">
                <?= Html::a('<i class="bx bxs-plus-square"></i>Create Store Category', ['create'], ['class' => 'btn btn-light radius-30 mt-2 mt-lg-0']) ?>
            </div>
        </div>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'category_name',
                [
                    'attribute' => 'status',
                    'value' => function ($model) {
                        return $model->getStatus($model->status);
                    }
                ],
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, StoreCategory $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
    </div>
</div>
