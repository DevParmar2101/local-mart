<?php

use common\models\UserStore;
use kartik\select2\Select2;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var $model UserStore */
/** @var $form ActiveForm*/

?>
<!-- checkout area start -->
<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="billing-info-wrap">
                    <h3 class="seller-form-title text-center after-border">Personal Details</h3>
                    <div class="your-order-areas">
                            <?php $form = ActiveForm::begin(['id' => 'seller-form'])?>

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <?= $form->field($model,'first_name')->textInput(['placeholder' => 'First Name'])->label(false); ?>
                                </div>
                                <div class="col-md-6 col-12">
                                    <?= $form->field($model,'last_name')->textInput(['placeholder' => 'Last Name'])->label(false); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <?= $form->field($model,'contact_number')->textInput(['placeholder' => 'Contact Number'])->label(false)?>
                                </div>
                            </div>
                            <hr>
                            <h3 class="seller-form-title text-center after-border">Store Name</h3>

                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <?= $form->field($model,'store_name')->textInput(['placeholder' => 'Store Name'])->label(false)?>
                                </div>
                            </div>
                            <hr>
                            <h3 class="seller-form-title text-center after-border">Address</h3>

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <?= $form->field($model,'state')->textInput(['placeholder' => 'State'])->label(false)?>
                                </div>
                                <div class="col-md-6 col-12">
                                    <?= $form->field($model,'city')->textInput(['placeholder' =>'City'])->label(false)?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <?= $form->field($model,'address')->textarea(['rows' => 6,'placeholder' => 'Address'])->label(false)?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <?= $form->field($model,'zip_code')->textInput(['placeholder'=> 'Zip Code'])->label(false)?>
                                </div>
                            </div>
                            <hr>
                            <h3 class="seller-form-title text-center after-border">Select Category</h3>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <?= $form->field($model,'category')->widget(Select2::class,[
                                            'data'=> (new common\models\StoreSubCategory)->getCategoryName(),
                                        'options' => ['placeholder' => 'Select Category'],
                                        'pluginOptions' => [
                                            'allowClear' => true,
                                        ]
                                    ])->label(false)?>
                                </div>
                            </div>

                            <div class="Place-order mt-25">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-primary blog-btn']) ?>
                            </div>
                            <?php ActiveForm::end()?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <?= Html::img(Yii::getAlias('@web/images/hero/bg/seller3.jpg'),['class'=>'seller-image'])?>

                <?= Html::img(Yii::getAlias('@web/images/hero/bg/seller2.jpg'),['class'=>'seller-image'])?>
            </div>
        </div>
    </div>
</div>
<!-- checkout area end -->