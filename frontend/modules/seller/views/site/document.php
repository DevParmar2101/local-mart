<?php

use kartik\file\FileInput;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'Document Form';
/** @var $form ActiveForm*/
/** @var $model \common\models\UserStore*/

?>

<div class="row">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <h4>Documents : <?= $model->store_name?></h4>
                <?php $form = ActiveForm::begin(['id' => 'user-store-document-form']); ?>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'document_one')->widget(FileInput::class,[
                            'options' => [
                                'accept' => 'image/*',
                                'multiple' => false,
                            ],
                            'pluginOptions' => [
                                'initialPreview' => $model->document_one ? $model->getImage('document_one','Document One','img-thumbnail') : false,
                                'initialPreviewData' => true,
                                'browseClass' => 'btn btn-warning blog-btn',
                                'showPreview' => true,
                                'showCaption' => false,
                                'showRemove' => false,
                                'showCancel' => false,
                                'showUpload' => false,
                            ],
                        ])?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'document_two')->widget(FileInput::class,[
                            'options' => [
                                'accept' => 'image/*',
                                'multiple' => true,
                            ],
                            'pluginOptions' => [
                                'initialPreview' => $model->document_two ? $model->getImage('document_two','Document Two','img-thumbnail') : false,
                                'initialPreviewData' => true,
                                'browseClass' => 'btn btn-warning blog-btn',
                                'showPreview' => true,
                                'showCaption' => false,
                                'showRemove' => false,
                                'showCancel' => false,
                                'showUpload' => false,
                            ],
                        ])?>
                    </div>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Save',['class' => 'btn btn-primary blog-btn'])?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>