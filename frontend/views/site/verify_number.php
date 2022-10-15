<?php

use common\models\User;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/** @var $model User*/

$this->title = 'Verify Number';
?>
<!-- login area start -->
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active"  href="<?= Url::toRoute('site/login')?>">
                            <h4>login</h4>
                        </a>
                        <a  href="<?= Url::toRoute('site/signup')?>">
                            <h4>register</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <?php $form = ActiveForm::begin([
                                        'id' => 'verify-number-form',
                                        'layout' => 'horizontal',
                                        'fieldConfig' => [
                                            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
                                            'labelOptions' => [
                                                'class' => 'col-lg-2 control-label'
                                            ]
                                        ]
                                    ])?>

                                    <div class="section-1">
                                        <?= $form->field($model,'contact_number')->textInput(['placeholder' => 'Contact Number'])->label(false)?>

                                        <div class="button-box">
                                            <?= Html::button('Send OTP',['class' => 'btn btn-primary','id' => 'request-otp-btn']); ?>
                                        </div>
                                    </div>

                                    <div class="section-2" style="display:none;">
                                        <?= $form->field($model,'otp_field')->textInput(); ?>

                                        <div class="button-box">
                                            <?= Html::button('Submit',['class' => 'btn btn-primary', 'id' => 'verify-number'])?>
                                        </div>
                                    </div>
                                    <?php ActiveForm::end()?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$otpUrl = Url::toRoute(['site/send-otp']);
$otpValidate = Url::toRoute(['site/otp-validate']);
$signupSuccessful = Url::toRoute(['site/signup-successful']);
$csrf = Yii::$app->request->csrfToken;

$script =<<<JS
    $('button#request-otp-btn').click(function(){
       sendOtp(); 
    });
JS;

$position = View::POS_READY;
$this->registerJS($script,$position);
?>