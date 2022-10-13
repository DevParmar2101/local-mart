<?php

use common\models\PageContent;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var $pages PageContent*/
?>
<header>
    <!-- Header action area start -->
    <div class="header-bottom  d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col">
                    <div class="header-logo">
                        <a href="<?= Url::toRoute('/')?>">
                            <?= Html::img(Yii::getAlias('@web/images/logo/logo.png'),['class' => 'frontend-logo-image'])?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-sm-none d-lg-block">
                    <div class="main-menu position-relative">
                        <ul>
                            <?php foreach ($pages as $page) {
                                /** @var $page PageContent*/
                            ?>
                            <li><a href="<?= Url::toRoute('page/'.$page->slug)?>"><?= $page->title?></a></li>
                            <?php }?>
                            <li><a href="<?= Url::toRoute('site/contact')?>">Contact</a></li>
                            <li><a href="<?= Url::toRoute('site/seller')?>">Become a Seller</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col">
                    <div class="header-actions">
                        <?php if (Yii::$app->user->isGuest){?>
                            <?= Html::a('Login',['site/login'],['class' =>'header-action-btn'])?>
                        <?php }else{?>
                            <!-- Single Wedge Start -->
                            <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                <i class="pe-7s-like"></i>
                            </a>
                            <?= Html::a('<i class="pe-7s-user"></i>'. Yii::$app->user->identity->username,['site/logout'],['data' => ['method' => 'post'],'class' => 'header-action-btn offcanvas-toggle'])?>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">01</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header action area end -->
    <!-- Header action area start -->
    <div class="header-bottom d-lg-none sticky-nav style-1">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col">
                    <div class="header-logo">
                        <a href="<?= Url::toRoute('/')?>">
                            <?= Html::img(Yii::getAlias('@web/images/logo/logo.png'),['class' => 'frontend-logo-image'])?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="main-menu position-relative">
                        <ul>
                            <?php foreach ($pages as $page) {
                                /** @var $page PageContent*/
                                ?>
                                <li><a href="<?= Url::toRoute('page/'.$page->slug)?>"><?= $page->title?></a></li>
                            <?php }?>
                            <li><a href="<?= Url::toRoute('site/contact')?>">Contact</a></li>
                            <li><a href="<?= Url::toRoute('site/seller')?>">Become a Seller</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col">
                    <div class="header-actions">
                        <!-- Single Wedge Start -->
                        <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                            <i class="pe-7s-like"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="pe-7s-shopbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="pe-7s-menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header action area end -->
    <div class="mobile-search-box d-none">
        <div class="container">
            <!-- mobile search start -->
            <div class="search-element max-width-100">
                <div class="main-menu position-relative">
                    <ul>
                        <?php foreach ($pages as $page) {
                            /** @var $page PageContent*/
                            ?>
                            <li><a href="<?= Url::toRoute('page/'.$page->slug)?>"><?= $page->title?></a></li>
                        <?php }?>
                        <li><a href="<?= Url::toRoute('site/contact')?>">Contact</a></li>
                        <li><a href="<?= Url::toRoute('site/seller')?>">Become a Seller</a></li>
                    </ul>
                </div>
            </div>
            <!-- mobile search start -->
        </div>
    </div>
</header>
