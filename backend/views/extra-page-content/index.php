<?php

use common\models\ExtraPageContent;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\ExtraPageContentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Extra Page Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">
        <div class="d-lg-flex align-items-center mb-4 gap-3">
            <div class="ms-auto">
                <?= Html::a('<i class="bx bxs-plus-square"></i>Create Extra Page Content', ['create'], ['class' => 'btn btn-light radius-30 mt-2 mt-lg-0']) ?>
            </div>
        </div>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'title',
                [
                        'attribute' => 'sub_title',
                        'format' => 'raw',
                ],
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
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, ExtraPageContent $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
    </div>
</div>
