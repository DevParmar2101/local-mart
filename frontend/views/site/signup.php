<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- login area start -->
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a href="<?= Url::toRoute('site/login')?>">
                            <h4>login</h4>
                        </a>
                        <a class="active" href="<?= Url::toRoute('site/signup')?>">
                            <h4>register</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                                    <?= $form->field($model, 'username')->textInput(['placeholder' =>'Username'])->label(false) ?>

                                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false)?>

                                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false) ?>
                                    <div class="button-box">
                                        <?= Html::submitButton('Register', ['class' => 'btn btn-secondary btn-sm']) ?>
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