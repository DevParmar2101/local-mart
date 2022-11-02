<?php

use common\models\Product;
use kartik\select2\Select2;
use sangroya\ckeditor5\CKEditor;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\web\View;

/**@var $form ActiveForm*/
/**@var $model Product*/

$this->title = 'Create ';
?>
<div class="row">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <h4>Create Product</h4>
                <?php $form = ActiveForm::begin(['id' => 'product-create-form']);?>
                <?php Html::errorSummary($model)?>
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
                            $url = Url::toRoute(['site/sub-category-list']);
                            echo $form->field($model,'category')->widget(Select2::class,[
                                    'data' => (new common\models\StoreSubCategory)->getCategoryName(),
                                    'options' => [
                                            'placeholder' => 'Select Category',
                                            'onchange' => '
                                            $.post("'.$url.'?id="+$(this).val(), function( data ) {
                                            $("select#product-sub_category").html( data );
                                            });'
                                    ],
                                    'pluginOptions' => [
                                            'templateResult' => new JsExpression('format'),
                                            'templateSelection' => new JsExpression('format'),
                                            'escapeMarkup' => $escape,
                                            'allowClear' => true,
                                    ],
                            ])
                            ?>
                        </div>
                        <div class="col-md-6 col-12">
                            <?= $form->field($model,'sub_category')->widget(Select2::class,[
                                    'options' => [
                                            'placeholder' => 'Select Sub Category',
                                    ],
                                    'pluginOptions' => [
                                            'allowClear' => true,
                                    ],
                            ]); ?>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-12 col-12">
                        <?= $form->field($model,'product_name')->textInput(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'product_price')->textInput(); ?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'quantity')->textInput(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'warranty_period')->textInput(); ?>
                    </div>
                    <div class="col-md-6 col-12">
                        <?= $form->field($model,'available_for')->textInput(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-12">
                        <?= $form->field($model,'discount')->textInput(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-12">
                        <?= $form->field($model,'information')->widget(CKEditor::class,[
                                'options' => ['rows' => 6,]
                        ])?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-12">
                        <?= $form->field($model,'description')->widget(CKEditor::class,[
                            'options' => ['rows' => 6]
                        ])?>
                    </div>
                </div>

                <div class="place-order mt-25">
                    <?= Html::submitButton('Save',['class' => 'btn btn-primary blog-btn'])?>
                </div>
                <?php ActiveForm::end()?>
            </div>
        </div>
    </div>
</div>