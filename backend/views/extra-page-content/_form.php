<?php

use kartik\file\FileInput;
use kartik\select2\Select2;
use sangroya\ckeditor5\CKEditor;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ExtraPageContent $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="card border-top border-0 border-4 border-white">
    <div class="card-body p-5">
        <div class="card-title d-flex align-items-center">
            <div>
                <i class='bx bx-edit-alt me-1 font-22 text-white'></i>
            </div>
            <h5 class="mb-0 text-white"><?= Html::encode($this->title)?></h5>
        </div>
        <hr>
        <?php $form = ActiveForm::begin(['id' => 'extra-page-content-form']); ?>

        <div class="row">
            <div class="col-md-12 col-12">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <?= $form->field($model, 'sub_title')->widget(CKEditor::className(),[
                    'options' => ['rows' => 6],
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'image')->widget(FileInput::class,[
                    'options' => [
                        'accept' => 'image/*',
                        'multiple' => false,
                    ],
                    'pluginOptions' => [
                        'initialPreview' => $model->image ? $model->getImage('image','Image not found','img-thumbnail') : false,
                        'initialPreviewData' => true,
                        'showPreview' => true,
                        'showCaption' => true,
                        'showRemove' => false,
                        'showCancel' => false,
                        'showUpload' => false
                    ]
                ]) ?>
            </div>
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'child_image')->widget(FileInput::class,[
                    'options' => [
                        'accept' => 'image/*',
                        'multiple' => false,
                    ],
                    'pluginOptions' => [
                        'initialPreview' => $model->child_image ? $model->getImage('child_image','Child Image bot Found','img-thumbnail') : false,
                        'initialPreviewData' => true,
                        'showPreview' => true,
                        'showCaption' => true,
                        'showRemove' => false,
                        'showCancel' => false,
                        'showUpload' => false
                    ]
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-12">
                <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'button_title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'button_url')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'show_button')->widget(Select2::class,[
                        'data' => $model->getButton(),
                        'options' => ['placeholder' => 'Show'],
                        'pluginOptions' => [
                                'allowClear' => true,
                        ],
                ]) ?>
            </div>
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'use_for')->widget(Select2::class,[
                        'data' => $model->getUseFor(),
                        'options' => ['placeholder' => 'Select Use For'],
                        'pluginOptions' => [
                                'allowClear' => true,
                        ]
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'status')->widget(Select2::class,[
                    'data' => $model->getStatus(),
                    'options' => ['placeholder' => 'Select Status'],
                    'pluginOptions' => [
                        'allowClear' => true,
                    ],
                ]) ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-light px-5']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>