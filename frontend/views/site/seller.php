<?php

use common\models\UserStore;
use yii\bootstrap5\ActiveForm;

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
                    <?php $form = ActiveForm::begin(['id' => 'seller-form'])?>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <?= $form->field($model,'first_name')->textInput(); ?>
                        </div>
                        <div class="col-md-6 col-12">
                            <?= $form->field($model,'last_name')->textInput(); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <?= $form->field($model,'contact_number')->textInput()?>
                        </div>
                    </div>

                    <h3 class="seller-form-title text-center after-border">Store Name</h3>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <?= $form->field($model,'store_name')->textInput()?>
                        </div>
                    </div>
                    <?php ActiveForm::end()?>
                </div>
            </div>
            <div class="col-lg-5">
                <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/hero/bg/seller3.jpg'),['class'=>'seller-image'])?>

                <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/hero/bg/seller2.jpg'),['class'=>'seller-image'])?>
            </div>
        </div>
    </div>
</div>
<!-- checkout area end -->