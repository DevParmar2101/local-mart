<?php

use common\models\Product;
use common\models\ProductImage;
use kartik\file\FileInput;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $model ProductImage*/
/* @var $product Product*/
/* @var $form ActiveForm*/
?>
<div class="row mx-30">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <h4 class="seller-form-title text-center">
                    <a href="<?= Url::toRoute(['product/index'])?>" class="btn btn-warning">Back</a>
                </h4>
                <h4>Product Images of :- <?= $product->product_name?></h4>
                <?php $form = ActiveForm::begin(['class' => 'product-image-form'])?>
                <div class="row mx-30">
                    <div class="col-lg-12">
                        <?= $form->field($model,'image')->widget(FileInput::class,[
                            'options' => [
                                'accept' => 'image/*',
                                'multiple' => true,
                            ],
                            'pluginOptions' => [
                                'showPreview' => true,
                                'showCaption' => true,
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
                <?php $form = ActiveForm::end()?>
            </div>
        </div>
    </div>
</div>
