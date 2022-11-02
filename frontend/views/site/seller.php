<?php

use common\models\UserStore;
use kartik\select2\Select2;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\web\View;

$this->title = 'Seller';
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
                                    <?php
                                    $format = <<< SCRIPT
function format(state) {
    if (!state.id) return state.text; // optgroup

    return state.text;
}
SCRIPT;
                                    $escape = new JsExpression("function(m) { return m; }");
                                    $this->registerJs($format, View::POS_HEAD);
                                    ?>
                                    <?php
                                    $url = Url::toRoute(['/site/city-list']);
                                    echo $form->field($model,'state')->widget(Select2::class,[
                                        'data'=> $model->getStateName(),
                                        'options' => [
                                                'placeholder' => 'Select Selling Type',
                                            'onchange' => '
                                                    $.post("'.$url.'?id="+$(this).val(), function( data ) {
                    $("select#userstore-city").html( data );
                                    });'
                                        ],
                                        'pluginOptions' => [
                                            'templateResult' => new JsExpression('format'),
                                            'templateSelection' => new JsExpression('format'),
                                            'escapeMarkup' => $escape,
                                            'allowClear' => true,
                                        ],
                                    ])->label(false)?>
                                </div>

                                <div class="col-md-6 col-12">
                                    <?= $form->field($model,'city')->widget(Select2::class,[
                                            'options' => [
                                                    'placeholder' => 'Select Cities',
                                            ],
                                            'pluginOptions' => [
                                                 'allowClear' => true,
                                            ],
                                    ])->label(false)?>
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
                                    <?= $form->field($model,'store_category')->widget(Select2::class,[
                                            'data'=> (new common\models\StoreSubCategory)->getCategoryName(),
                                        'options' => ['placeholder' => 'Select Category'],
                                        'pluginOptions' => [
                                            'allowClear' => true,
                                        ]
                                    ])->label(false)?>
                                </div>
                                <div class="col-md-6 col-12">
                                    <?= $form->field($model,'purchase_type')->widget(Select2::class,[
                                        'data'=> $model->getSellingType(),
                                        'options' => ['placeholder' => 'Select Selling Type'],
                                        'pluginOptions' => [
                                            'allowClear' => true,
                                        ]
                                    ])->label(false)?>
                                </div>
                            </div>

                            <h3 class="seller-form-title text-center after-border">Select Store Image</h3>
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <?= $form->field($model,'profile_image')->widget(\kartik\file\FileInput::class,[
                                            'options' => [
                                                    'accept' => 'image/*',
                                                    'multiple' => true,
                                            ],
                                            'pluginOptions' => [
                                                    'initialPreview' => $model
                                            ]
                                    ])?>
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