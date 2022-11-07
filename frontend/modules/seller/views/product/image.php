<?php

use common\models\Product;
use common\models\ProductImage;
use kartik\file\FileInput;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/* @var $model Product*/
/* @var $model_image ProductImage*/
/* @var $array_of_image array*/
/* @var $form ActiveForm*/
?>
<div class="row">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <h4>Product Name:- <span><?= $model->product_name?></span></h4>
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <?= $form->field($model_image,'image[]')->widget(FileInput::class,[
                            'options' => [
                                'accept' => 'image/*',
                                'multiple' => true,
                            ],
                            'pluginOptions' => [
                                'showRemove' => false,
                                'showCancel' => false,
                                'showUpload' => false,
                            ],
                        ]); ?>
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

<div class="card mt-5">
<div class="card-header">
    <div class="card-body">
        <div class="row">
            <?php foreach ($array_of_image as $old_image) {
                /* @var $old_image ProductImage*/
                ?>
            <div class="col-lg-3 col-12 mb-5">
                <div class="parent-image-product-image">
                    <?= $old_image->getImage('image','Not Found','index-product-image')?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
</div>