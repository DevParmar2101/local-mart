<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Settings $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'app_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_host')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_port')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_encryption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twilio_account_sid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twilio_auth_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twilio_service_sid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twilio_phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_dark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_light')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_transparent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'favicon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
