<?php

use common\models\StoreSubCategory;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\StoreSubCategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Store Sub Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">
        <div class="d-lg-flex align-items-center mb-4 gap-3">
            <div class="ms-auto">
                <?= Html::a('<i class="bx bxs-plus-square"></i>Create Store Sub Category', ['create'], ['class' => 'btn btn-light radius-30 mt-2 mt-lg-0']) ?>
            </div>
        </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, StoreSubCategory $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
    </div>
</div>
