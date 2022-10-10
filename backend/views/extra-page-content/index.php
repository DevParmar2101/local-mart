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
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3"><?= Yii::$app->name?></div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= Html::encode($this->title) ?>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

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

                'id',
                'title',
                'sub_title',
                'description:ntext',
                'image',
                //'button_title',
                //'button_url:url',
                //'show_button',
                //'use_for',
                //'status',
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
