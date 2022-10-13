<?php

/** @var \yii\web\View $this */
/** @var string $content */

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
        <title>Local Mart |<?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="main-wrapper">
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
                                    <li class="dropdown"><a href="#">Home <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="<?= Url::toRoute('/')?>">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown position-static"><a href="about.html">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu d-block">
                                            <li class="d-flex">
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Inner Pages</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                                    <li><a href="faq.html">Faq Page</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                                </ul>
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Other Shop Pages</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                                </ul>
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Related Shop Pages</a></li>
                                                    <li><a href="my-account.html">Account Page</a></li>
                                                    <li><a href="login.html">Login & Register Page</a></li>
                                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                                    <li><a href="thank-you-page.html">Thank You Page</a></li>
                                                </ul>
                                                <ul class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                                    <li>
                                                        <a class="p-0" href="shop-left-sidebar.html">
                                                            <?= Html::img(Yii::getAlias('@web/images/banner/menu-banner.png'),['class' => 'img-responsive w-100'])?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="#">Shop <i
                                                    class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu d-block">
                                            <li class="d-flex">
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Shop Page</a></li>
                                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                    </li>
                                                </ul>
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">product Details Page</a></li>
                                                    <li><a href="single-product.html">Product Single</a></li>
                                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                                    <li><a href="single-product-group.html">Product Group</a></li>
                                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                                </ul>
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Single Product Page</a></li>
                                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                                    <li><a href="single-product-gallery-right.html">Product Gallery Right</a> </li>
                                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                                    </li>
                                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                                    </li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                </ul>
                                                <ul class="d-block p-0 border-0">
                                                    <li class="title"><a href="#">Single Product Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                                    <li><a href="my-account.html">Account Page</a></li>
                                                    <li><a href="login.html">Login & Register Page</a></li>
                                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown "><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Blog Grid
                                                    <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu sub-menu-2">
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Blog List
                                                    <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu sub-menu-2">
                                                    <li><a href="blog-list.html">Blog List</a></li>
                                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown position-static"><a href="blog-single-left-sidebar.html">Single
                                                    Blog <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu sub-menu-2">
                                                    <li><a href="blog-single.html">Single Blog</a>
                                                    <li><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a>
                                                    </li>
                                                    <li><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
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
                                    <li class="dropdown"><a href="#">Home <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="<?= Url::toRoute('/')?>">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown position-static"><a href="about.html">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu d-block">
                                            <li class="d-flex">
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Inner Pages</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                                    <li><a href="faq.html">Faq Page</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                                </ul>
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Other Shop Pages</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                                </ul>
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Related Shop Pages</a></li>
                                                    <li><a href="my-account.html">Account Page</a></li>
                                                    <li><a href="login.html">Login & Register Page</a></li>
                                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                                    <li><a href="thank-you-page.html">Thank You Page</a></li>
                                                </ul>
                                                <ul class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                                    <li>
                                                        <a class="p-0" href="shop-left-sidebar.html">
                                                            <?= Html::img(Yii::getAlias('@web/images/banner/menu-banner.png'),['class' => 'img-responsive w-100'])?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="#">Shop <i
                                                    class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu d-block">
                                            <li class="d-flex">
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Shop Page</a></li>
                                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                    </li>
                                                </ul>
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">product Details Page</a></li>
                                                    <li><a href="single-product.html">Product Single</a></li>
                                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                                    <li><a href="single-product-group.html">Product Group</a></li>
                                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                                </ul>
                                                <ul class="d-block">
                                                    <li class="title"><a href="#">Single Product Page</a></li>
                                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                                    <li><a href="single-product-gallery-right.html">Product Gallery Right</a> </li>
                                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                                    </li>
                                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                                    </li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                </ul>
                                                <ul class="d-block p-0 border-0">
                                                    <li class="title"><a href="#">Single Product Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                                    <li><a href="my-account.html">Account Page</a></li>
                                                    <li><a href="login.html">Login & Register Page</a></li>
                                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown "><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Blog Grid
                                                    <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu sub-menu-2">
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Blog List
                                                    <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu sub-menu-2">
                                                    <li><a href="blog-list.html">Blog List</a></li>
                                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown position-static"><a href="blog-single-left-sidebar.html">Single
                                                    Blog <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu sub-menu-2">
                                                    <li><a href="blog-single.html">Single Blog</a>
                                                    <li><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a>
                                                    </li>
                                                    <li><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
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
                                <li class="dropdown"><a href="#">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= Url::toRoute('/')?>">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown position-static"><a href="about.html">Pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Inner Pages</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>
                                                <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Other Shop Pages</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Related Shop Pages</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                                <li><a href="thank-you-page.html">Thank You Page</a></li>
                                            </ul>
                                            <ul class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html">
                                                        <?= Html::img(Yii::getAlias('@web/images/banner/menu-banner.png'),['class' => 'img-responsive w-100'])?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="#">Shop <i
                                                class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Shop Page</a></li>
                                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                </li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">product Details Page</a></li>
                                                <li><a href="single-product.html">Product Single</a></li>
                                                <li><a href="single-product-variable.html">Product Variable</a></li>
                                                <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                                <li><a href="single-product-group.html">Product Group</a></li>
                                                <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                                <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Single Product Page</a></li>
                                                <li><a href="single-product-slider.html">Product Slider</a></li>
                                                <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                                <li><a href="single-product-gallery-right.html">Product Gallery Right</a> </li>
                                                <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                                </li>
                                                <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                                </li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                            </ul>
                                            <ul class="d-block p-0 border-0">
                                                <li class="title"><a href="#">Single Product Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Blog Grid
                                                <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Blog List
                                                <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="blog-single-left-sidebar.html">Single
                                                Blog <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-single.html">Single Blog</a>
                                                <li><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a>
                                                </li>
                                                <li><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile search start -->
                </div>
            </div>
        </header>
        <?= $content ?>
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">f
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="<?= Url::toRoute('/')?>">
                                            <?= Html::img(Yii::getAlias('@web/images/logo/footer-logo.png'),['class' => 'frontend-logo-image'])?>
                                        </a>
                                    </div>
                                    <p class="about-text">Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore
                                    </p>
                                    <ul class="link-follow">
                                        <li>
                                            <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook"
                                                                                                                                 aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Services</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">My Account</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Contact Info</h4>
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">Address: Your Address Goes Here.</p>
                                        <p class="phone">Phone/Fax:<a href="tel:0123456789"> 0123456789</a></p>
                                        <p class="mail">Email:<a href="mailto:demo@example.com"> demo@example.com</a></p>
                                        <p class="mail"><a href="https://demo@example.com"> demo@example.com</a></p>
                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
