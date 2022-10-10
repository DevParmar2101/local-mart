<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ExtraPageContentSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="extra-page-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'sub_title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'button_title') ?>

    <?php // echo $form->field($model, 'button_url') ?>

    <?php // echo $form->field($model, 'show_button') ?>

    <?php // echo $form->field($model, 'use_for') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
