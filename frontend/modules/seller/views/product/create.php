<?php

use common\models\Product;
use common\models\StoreSubCategory;
use kartik\select2\Select2;
use yii\bootstrap5\ActiveForm;

/**@var $form ActiveForm*/
/**@var $model Product*/

?>
<div class="row">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <h4>Create Product</h4>
                <?php $form = ActiveForm::begin(['id' => 'product-create-form']);?>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <?= $form->field($model,'category')->widget(Select2::class,[
                                    'data' => (new common\models\StoreSubCategory)->getCategoryName(),
                                    'options' => ['placeholder' => 'Select Category'],
                                    'pluginOptions' => [
                                            'allowClear' => true,
                                    ]
                            ])?>
                        </div>
                    </div>
                <?php ActiveForm::end()?>
            </div>
        </div>
    </div>
</div>