<?php

use common\models\Settings;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\SettingsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Settings', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'app_name',
            'email_host:email',
            'email_username:email',
            'email_password:email',
            //'email_port:email',
            //'email_encryption:email',
            //'twilio_account_sid',
            //'twilio_auth_token',
            //'twilio_service_sid',
            //'twilio_phone_number',
            //'logo_dark',
            //'logo_light',
            //'logo_transparent',
            //'favicon',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Settings $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
