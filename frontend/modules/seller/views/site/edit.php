<?php

use common\models\UserStore;
use kartik\select2\Select2;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\web\View;

$this->title = 'Edit Form';
/** @var $model UserStore */
/** @var $form ActiveForm*/

?>
<div class="row">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <h4>Edit : <?= $model->store_name?></h4>

                <?php $form = ActiveForm::begin(['id' => 'shop-edit-page'])?>

                <h4 class="seller-form-title text-center after-border">
                    Personal Details
                </h4>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'first_name')->textInput()?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'last_name')->textInput()?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'contact_number')->textInput()?>
                    </div>
                </div>

                <h4 class="seller-form-title text-center after-border">
                    Store Name
                </h4>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?= $form->field($model,'store_name')->textInput()?>
                    </div>
                </div>

                <h4 class="seller-form-title text-center after-border">
                    Store Address
                </h4>

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
                        ])?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'city')->widget(Select2::class,[
                            'options' => [
                                'placeholder' => 'Select Cities',
                            ],
                            'pluginOptions' => [
                                'allowClear' => true,
                            ],
                        ])?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?= $form->field($model,'address')->textarea(['rows' => 6,'placeholder' => 'Address'])->label(false)?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?= $form->field($model,'zip_code')->textInput(['placeholder'=> 'Zip Code'])?>
                    </div>
                </div>

                <h4 class="seller-form-title text-center after-border">
                    Select Category
                </h4>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'store_category')->widget(Select2::class,[
                                'data' => (new common\models\StoreSubCategory)->getCategoryName(),
                                'options' => [
                                        'placeholder' => 'Select Category',
                                ],
                                'pluginOptions' => [
                                        'allowClear' => true,
                                ]
                        ])?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'purchase_type')->widget(Select2::class,[
                                'data' => $model->getSellingType(),
                                'options' => [
                                        'placeholder' => 'Select Selling Type',
                                ],
                            'pluginOptions' => [
                                    'allowClear' => true,
                            ]
                        ])?>
                    </div>
                </div>

                <div class="place-order mt-25">
                    <?= \yii\helpers\Html::submitButton('Save',['class' => 'btn btn-primary blog-btn'])?>
                </div>
                <?php ActiveForm::end()?>
            </div>
        </div>
    </div>
</div>
