<?php

use common\models\PageContent;
use common\models\UserStore;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var $pages PageContent*/
if (!Yii::$app->user->isGuest){
    $is_user_have_store = UserStore::findOne(['user_id' => \Yii::$app->user->identity->id]);
}?>
<header>
    <!-- Header action area start -->
    <div class="header-bottom  d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col">
                    <div class="header-logo">
                        <a href="<?= Url::toRoute('/')?>">
                            <?= Yii::$app->global->logo_light?>
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
                            <?php if ($is_user_have_store){?>
                                <li><a href="<?= Url::toRoute('/seller/site/index')?>">Seller Dashboard</a></li>
                            <?php }else{?>
                                <li>
                                    <a href="
                                <?=
                                    Yii::$app->user->isGuest
                                        ?Url::toRoute('site/signup')
                                        :Url::toRoute('site/seller')
                                    ?>
                                    ">
                                        Become a Seller</a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col">
                    <div class="header-actions">
                        <?php if (Yii::$app->user->isGuest){?>
                            <?= Html::a('Login',['site/login'],['class' =>'header-action-btn'])?>
                        <?php }else{?>
                            <!-- Single Wedge Start -->
                            <div class="btn-group">
                                <a class="header-action-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="pe-7s-user"></i> <?= Yii::$app->user->identity->username?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <?= Html::a('My account',['profile/account'],['class' =>'dropdown-item'])?>
                                    </li>
                                    <li>
                                        <?= Html::a('Logout',['site/logout'],['data' => ['method' => 'post'],'class' => 'dropdown-item'])?>
                                    </li>
                                </ul>
                            </div>
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
                            <?= Yii::$app->global->logo_light?>
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
                            <?php if ($is_user_have_store){?>
                                <li><a href="<?= Url::toRoute('/seller/site/index')?>">Seller Dashboard</a></li>
                            <?php }else{?>
                                <li>
                                    <a href="
                                    <?=
                                    Yii::$app->user->isGuest
                                        ?Url::toRoute('site/signup')
                                        :Url::toRoute('site/seller')
                                    ?>
                                ">Become a Seller</a>
                                </li>
                            <?php }?>
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
                        <?php if ($is_user_have_store){?>
                            <li><a href="<?= Url::toRoute('/seller/site/index')?>">Seller Dashboard</a></li>
                        <?php }else{?>
                            <li>
                                <a href="<?=
                                Yii::$app->user->isGuest
                                    ?Url::toRoute('site/signup')
                                    :Url::toRoute('site/seller')
                                ?>
                                ">Become a Seller</a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <!-- mobile search start -->
        </div>
    </div>
</header>
