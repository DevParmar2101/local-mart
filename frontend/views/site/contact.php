<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var ContactForm $model */

use frontend\models\ContactForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-area">
    <div class="container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="contact-form">
                        <div class="contact-title mb-30">
                            <h2 class="title">Send A Quest</h2>
                        </div>
                        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'contact-form-style']); ?>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <?= $form->field($model, 'name')->textInput() ?>
                            </div>
                            <div class="col-md-6 col-12">
                                <?= $form->field($model, 'email') ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <?= $form->field($model, 'subject') ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                ]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <?= \yii\helpers\Html::submitButton('Send Message',['class' => 'btn btn-primary'])?>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact-info">
                        <div class="single-contact">
                            <div class="icon-box">
                                <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/icons/contact-1.png'))?>
                            </div>
                            <div class="info-box">
                                <h5 class="title">Address</h5>
                                <p>Your address goes here. <br>
                                    123 Your Location</p>
                            </div>
                        </div>
                        <div class="single-contact">
                            <div class="icon-box">
                                <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/icons/contact-2.png'))?>
                            </div>
                            <div class="info-box">
                                <h5 class="title">Phone No</h5>
                                <p><a href="tel:0123456789">+012 345 67 89</a></p>
                                <p><a href="tel:0123456789">+012 345 67 89</a></p>
                            </div>
                        </div>
                        <div class="single-contact m-0">
                            <div class="icon-box">
                                <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/icons/contact-3.png'))?>
                            </div>
                            <div class="info-box">
                                <h5 class="title">Email/Web</h5>
                                <p><a href="mailto:demo@example.com">demo@example.com</a></p>
                                <p><a href="https://www.example.com">www.example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
