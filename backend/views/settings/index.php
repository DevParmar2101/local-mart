<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
$this->title = 'Settings Form';

/** @var yii\web\View $this */
/** @var common\models\Settings $model */
/** @var \yii\bootstrap5\ActiveForm $form */
?>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
        <hr/>
        <div class="card border-top border-0 border-4 border-white">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div>
                        <i class='bx bx-edit-alt me-1 font-22 text-white'></i>
                    </div>
                    <h5 class="mb-0 text-white"><?= Html::encode($this->title)?></h5>
                </div>
                <hr>
                <?php $form = ActiveForm::begin(['id' => 'settings-form']); ?>


                <?= $form->field($model, 'app_name')->textInput() ?>

                <h5 class="mb-0 text-white">Email Configurations</h5>
                <hr>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'email_host')->textInput() ?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'email_username')->textInput() ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'email_password')->textInput() ?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'email_port')->textInput() ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'email_encryption')->textInput() ?>
                    </div>
                </div>

                <h5 class="mb-0 text-white">Twilio Account</h5>
                <hr>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'twilio_account_sid')->textInput() ?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'twilio_auth_token')->textInput() ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'twilio_service_sid')->textInput() ?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'twilio_phone_number')->textInput() ?>
                    </div>
                </div>

                <h5 class="mb-0 text-white">Twilio Account</h5>
                <hr>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'logo_dark')->widget(FileInput::class,[
                            'options' => [
                                'accept' => 'image/*',
                                'multiple' => false,
                            ],
                            'pluginOptions' => [
                                'initialPreview' =>$model->logo_dark ? $model->getImage('logo_dark','Logo Dark','img-thumbnail'): false,
                                'initialPreviewData' => true,
                                'showPreview' => true,
                                'showCaption' => true,
                                'showRemove' => false,
                                'showCancel' => false,
                                'showUpload' => false
                            ],
                        ]) ?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'logo_light')->widget(FileInput::class,[
                            'options' => [
                                'accept' => 'image/*',
                                'multiple' => false,
                            ],
                            'pluginOptions' => [
                                'initialPreview' =>$model->logo_light ? $model->getImage('logo_light','Logo Light','img-thumbnail') : false,
                                'initialPreviewData' => true,
                                'showPreview' => true,
                                'showCaption' => true,
                                'showRemove' => false,
                                'showCancel' => false,
                                'showUpload' => false
                            ]
                        ]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model, 'logo_transparent')->widget(FileInput::class,[
                            'options' => [
                                'accept' => 'image/*',
                                'multiple' => false,
                            ],
                            'pluginOptions' => [
                                'initialPreview' =>$model->logo_transparent ? $model->getImage('logo_transparent','Transparent Logo','img-thumbnail') : false,
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
                        <?= $form->field($model, 'favicon')->widget(FileInput::class,[
                            'options' => [
                                'accept' => 'image/*',
                                'multiple' => false,
                            ],
                            'pluginOptions' => [
                                'initialPreview' =>$model->favicon ? $model->getImage('favicon','Favicon','img-thumbnail') : false,
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

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-light px-5']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>