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
                                            <?= Html::button('Submit',['class' => 'btn btn-primary', 'id' => 'verify-number-button'])?>
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
$otpValidate = Url::toRoute(['site/verify-number']);
$signupSuccessful = Url::toRoute(['site/index']);
$csrf = Yii::$app->request->csrfToken;

$script =<<<JS
    $('button#request-otp-btn').click(function(){
       sendOtp(); 
    });
    function sendOtp() {
        $('#verify-number-form').yiiActiveForm('validateAttribute', 'user-contact_number');
        setTimeout(function () {
            var contactNumber = $('#user-contact_number');
            var phone = contactNumber.val();
            var isPhoneValid = ($('div.field-contact_number.has-error').length==0);
            if (phone!=='' && isPhoneValid) {
                $.ajax({
                url:'$otpUrl',
                data: {phone: phone, _csrf:'$csrf'},
                method: 'POST',
                beforeSend: function () {
                    $('#request-otp-btn').prop('disabled',true);
                },
                error:function ( xhr, err ) {
                    alert('An errror ocurred, please try again');
                },
                complete:function () {
                    $('#request-otp-btn').prop('disabled', false);
                },
                success: function (data) {
                    if (data.success==false) {
                        $('.section-1').hide();
                        $('.section-2').show();
                        alert(data.msg);
                       
                    }else {
                        alert(data.msg);
                        return false; 
                    }
                }
                });
            }
        }, 200);
    }
    $('#verify-number-button').click(function (){
        login();
    });
    function login(){
        var form = $('#verify-number-form')
        form.yiiActiveForm('validateAttribute', 'user-otp_field');
        setTimeout(function (){
            var otp = $('#user-otp_field').val();
            var isOtpValid = ($('div.field-user-otp_field.has-error').length==0);
            if (otp!=='' && isOtpValid) {
                $.ajax({
                    url: '$otpValidate',
                    data:form.serialize(),
                    dataType: 'json',
                    method: 'POST',
                    beforeSend: function () {
                        $('#verify-number-button').prop('disabled',true);
                    },
                    error: function ( xhr, err ) {
                        alert('An error occured, Please try again');
                    },
                    complete: function () {
                        $('#verify-number-button').prop('disabled', false);
                    },
                    success: function (data){
                        if (data.success == true) {
                            alert(data.msg);
                            window.location = "$signupSuccessful";
                        }else{
                            alert(data.msg);
                        }
                    }
                });
            }
        }, 200);
    }
JS;

$position = View::POS_READY;
$this->registerJS($script,$position);
?>