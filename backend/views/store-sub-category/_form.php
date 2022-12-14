<?php

use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\StoreSubCategory $model */
/** @var ActiveForm $form */
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
        <?php $form = ActiveForm::begin(['id' => 'store-sub-category-form']); ?>

        <div class="row">
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'category_name')->widget(Select2::class,[
                        'data' => $model->getCategoryName(),
                    'options' => ['placeholder' => 'Select Status'],
                    'pluginOptions' => [
                        'allowClear' => true,
]
                ]) ?>
            </div>
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'sub_category')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'status')->widget(Select2::class,[
                        'data' => $model->getStatus(),
                        'options' => ['placeholder' => 'Select Status'],
                        'pluginOptions' => [
                                'allowClear' => true,
                        ]
                ]) ?>
            </div>
            <div class="col-md-6 col-12">
                <?= $form->field($model, 'is_featured')->widget(Select2::class,[
                    'data' => $model->getStatus(),
                    'options' => ['placeholder' => 'Select Is Featured'],
                    'pluginOptions' => [
                        'allowClear' => true,
                    ]
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-12">
                <?= $form->field($model,'image')->widget(FileInput::class,[
                        'options' => [
                                'multiple' => false,
                        ],
                        'pluginOptions' => [
                            'initialPreview' => $model->image ? $model->getImage('image','Not found','img-thumbnail',false) : false,
                            'initialPreviewData' => true,
                            'showPreview' => true,
                            'showCaption' => true,
                            'showRemove' => false,
                            'showCancel' => false,
                            'showUpload' => false,
                        ],
                ])?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-light px-5']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

