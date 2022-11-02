<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\FooterWidget;
use common\widgets\HeaderWidget;
use frontend\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title>Local Mart | <?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="main-wrapper">
        <!-- Header Area Start -->
        <?= HeaderWidget::widget();?>
        <!-- Header Area End -->
        <?= \common\widgets\Alert::widget()?>
        <?= $content ?>
        <!-- Footer Area Start -->
        <?= FooterWidget::widget()?>
        <!-- Footer Area End -->
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
