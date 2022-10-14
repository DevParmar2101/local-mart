<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\SettingsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="settings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'app_name') ?>

    <?= $form->field($model, 'email_host') ?>

    <?= $form->field($model, 'email_username') ?>

    <?= $form->field($model, 'email_password') ?>

    <?php // echo $form->field($model, 'email_port') ?>

    <?php // echo $form->field($model, 'email_encryption') ?>

    <?php // echo $form->field($model, 'twilio_account_sid') ?>

    <?php // echo $form->field($model, 'twilio_auth_token') ?>

    <?php // echo $form->field($model, 'twilio_service_sid') ?>

    <?php // echo $form->field($model, 'twilio_phone_number') ?>

    <?php // echo $form->field($model, 'logo_dark') ?>

    <?php // echo $form->field($model, 'logo_light') ?>

    <?php // echo $form->field($model, 'logo_transparent') ?>

    <?php // echo $form->field($model, 'favicon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
