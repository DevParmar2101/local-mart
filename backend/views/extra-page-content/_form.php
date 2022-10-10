<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ExtraPageContent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="extra-page-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'button_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'button_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_button')->textInput() ?>

    <?= $form->field($model, 'use_for')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
