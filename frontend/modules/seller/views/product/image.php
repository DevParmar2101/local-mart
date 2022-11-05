<?php

use common\models\Product;
use common\models\ProductImage;
use kartik\file\FileInput;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $model Product*/
/* @var $form ActiveForm*/
?>
<div class="row">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <h4>Create Product</h4>
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multiple/form-data']]);?>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'product_image')->widget(FileInput::class,[
                            'options' => [
                                'multiple' => true,
                            ],
                            'pluginOptions' => [
                                'showRemove' => false,
                                'showCancel' => false,
                                'showUpload' => false,
                            ],
                        ])?>
                    </div>
                </div>
                <div class="place-order mt-25">
                    <?= Html::submitButton('Save',['class' => 'btn btn-primary blog-btn'])?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

