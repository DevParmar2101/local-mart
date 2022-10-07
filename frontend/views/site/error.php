<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="section-404 section" data-bg-image="<?= Yii::getAlias('@web/images/404/404-white.png')?>">
    <div class="container">
        <div class="content-404">
            <h2 class="title"><?= Html::encode($this->title) ?></h2>
            <h3 class="sub-title"><?= nl2br(Html::encode($message)) ?></h3>
            <p>You could either go back or go to homepage</p>
            <div class="buttons">
                <a class="btn btn-dark btn-outline-hover-dark" href="<?= \yii\helpers\Url::toRoute('/')?>">Homepage</a>
            </div>
        </div>
    </div>
</div>