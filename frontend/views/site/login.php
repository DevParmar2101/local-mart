<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var LoginForm $model */
/** @var SignupForm $register */

use common\models\LoginForm;
use frontend\models\SignupForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
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
                                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username'])->label(false) ?>

                                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false)?>

                                     <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" name="rememberMe" />
                                                <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                <a href="<?= Url::toRoute('site/request-password-reset')?>">Forgot Password?</a>
                                            </div>
                                         <?= Html::submitButton('Login', ['class' => 'btn btn-sm btn-secondary', 'name' => 'login-button']) ?>
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