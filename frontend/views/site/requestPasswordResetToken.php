<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- login area start -->
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active"  href="<?= Url::toRoute('site/request-password-reset')?>">
                            <h4>Password Reset</h4>
                        </a>
                        <a  href="<?= Url::toRoute('site/login')?>">
                            <h4>Login</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email Address'])->label(false) ?>

                                    <div class="button-box">
                                        <?= Html::submitButton('Send', ['class' => 'btn btn-sm btn-secondary', 'name' => 'login-button']) ?>
                                    </div>
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->