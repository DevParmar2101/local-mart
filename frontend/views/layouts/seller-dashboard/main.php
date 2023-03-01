<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
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
        <div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page sidebar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 order-lg-last col-md-12 order-md-first">
                        <?= Alert::widget()?>
                        <?= $content ?>
                    </div>
                    <div class="col-lg-3 order-lg-first col-md-12 order-md-last mt-md-50px mt-lm-50px" data-aos="fade-up" data-aos-delau="200">
                        <div class="blog-sidebar mr-20px">
                            <?= $this->render('left_sidebar'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
