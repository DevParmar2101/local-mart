<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<!-- offcanvas overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas overlay end -->
<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="single-product.html" class="image">
                        <?= Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt'=>'Cart product Image'])?>
<!--                        <img src="assets/images/product-image/1.webp" alt="Cart product Image">-->
                    </a>
                    <div class="content">
                        <a href="single-product.html" class="title">Modern Smart Phone</a>
                        <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image">
                        <?= Html::img(Yii::getAlias('@web/images/product-image/2.webp'),['alt'=>'Cart product Image'])?>
                    </a>
                    <div class="content">
                        <a href="single-product.html" class="title">Bluetooth Headphone</a>
                        <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image">
                        <?= Html::img(Yii::getAlias('@web/images/product-image/3.webp'),['alt'=>'Cart product Image'])?>
                    </a>
                    <div class="content">
                        <a href="single-product.html" class="title">Smart Music Box</a>
                        <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->
<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="single-product.html" class="image">
                        <?= Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt'=>'Cart product Image'])?>
                    </a>
                    <div class="content">
                        <a href="single-product.html" class="title">Modern Smart Phone</a>
                        <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image">
                        <?= Html::img(Yii::getAlias('@web/images/product-image/2.webp'),['alt'=>'Cart product Image'])?>
                    </a>
                    <div class="content">
                        <a href="single-product.html" class="title">Bluetooth Headphone</a>
                        <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image">
                        <?= Html::img(Yii::getAlias('@web/images/product-image/3.webp'),['alt'=>'Cart product Image'])?>
                    </a>
                    <div class="content">
                        <a href="single-product.html" class="title">Smart Music Box</a>
                        <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons mt-30px">
                <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->
<!-- OffCanvas Menu Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>
    <div class="user-panel">
        <ul>
            <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
            <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> demo@example.com</a></li>
            <li><a href="my-account.html"><i class="fa fa-user"></i> Account</a></li>
        </ul>
    </div>
    <div class="inner customScroll">
        <div class="offcanvas-menu mb-4">
            <ul>
                <li><a href="#"><span class="menu-text">Home</span></a>
                    <ul class="sub-menu">
                        <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                        <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                    </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li>
                    <a href="#"><span class="menu-text">Pages</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#"><span class="menu-text">Inner Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="faq.html">Faq Page</a></li>
                                <li><a href="coming-soon.html">Coming Soon Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text"> Other Shop Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="compare.html">Compare Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Related Shop Page</span></a>
                            <ul class="sub-menu">
                                <li><a href="my-account.html">Account Page</a></li>
                                <li><a href="login.html">Login & Register Page</a></li>
                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                <li><a href="thank-you-page.html">Thank You Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#"><span class="menu-text">Shop Page</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                </li>
                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                </li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">product Details Page</span></a>
                            <ul class="sub-menu">
                                <li><a href="single-product.html">Product Single</a></li>
                                <li><a href="single-product-variable.html">Product Variable</a></li>
                                <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                <li><a href="single-product-group.html">Product Group</a></li>
                                <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                <li><a href="single-product-slider.html">Product Slider</a></li>
                                <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Single Product Page</span></a>
                            <ul class="sub-menu">
                                <li><a href="single-product-gallery-right.html">Product Gallery
                                        Right</a> </li>
                                <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                </li>
                                <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                </li>
                                <li><a href="compare.html">Compare Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                <li><a href="my-account.html">Account Page</a></li>
                                <li><a href="login.html">Login & Register Page</a></li>
                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Blog</span></a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                        <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                        <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                        <li><a href="blog-list.html">Blog List Page</a></li>
                        <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                        <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                        <li><a href="blog-single.html">Blog Single Page</a></li>
                        <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                        <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <!-- OffCanvas Menu End -->
        <div class="offcanvas-social mt-auto">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Menu End -->
<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="<?= Yii::getAlias('@web/images/hero/bg/hero-bg-1.webp')?>">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Welcome To Hmart</span>
                                <h2 class="title-1">Your Home <br>
                                    Smart Devices & <br>
                                    Best Solution </h2>
                                <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Shop All Devices</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <?= Html::img(Yii::getAlias('@web/images/hero/inner-img/hero-1-1.png'),['alt'=>'Hero One'])?>
<!--                                    <img src="assets/images/hero/inner-img/hero-1-1.png" alt="" />-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="<?= Yii::getAlias('@web/images/hero/bg/hero-bg-1.webp')?>">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Welcome To Hmart</span>
                                <h2 class="title-1">Your Home <br>
                                    Smart Devices & <br>
                                    Best Solution </h2>
                                <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Shop All Devices</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <?= Html::img(Yii::getAlias('@web/images/hero/inner-img/hero-1-2.png'),['alt'=>'Hero Two'])?>
<!--                                    <img src="assets/images/hero/inner-img/hero-1-2.png" alt="" />-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<!-- Hero/Intro Slider End -->
<!-- Banner Area Start -->
<div class="banner-area style-one pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-banner nth-child-1">
                    <?= Html::img(Yii::getAlias('@web/images/banner/3.webp'),['alt'=>'Banner Three'])?>
<!--                    <img src="assets/images/banner/3.webp" alt="">-->
                    <div class="banner-content nth-child-1">
                        <h3 class="title">Smart Watch For <br>
                            Your Hand</h3>
                        <span class="category">From $29.00</span>
                        <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-banner nth-child-2 mb-30px mb-lm-30px mt-lm-30px ">
                    <?= Html::img(Yii::getAlias('@web/images/banner/4.webp'),['alt'=>'Banner Four'])?>
<!--                    <img src="assets/images/banner/4.webp" alt="">-->
                    <div class="banner-content nth-child-2">
                        <h3 class="title">Headphones</h3>
                        <span class="category">From $95.00</span>
                        <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="single-banner nth-child-2">
                    <?= Html::img(Yii::getAlias('@web/images/banner/5.webp'),['alt'=>'Banner Five'])?>
<!--                    <img src="assets/images/banner/5.webp" alt="">-->
                    <div class="banner-content nth-child-3">
                        <h3 class="title">Smartphone</h3>
                        <span class="category">From $69.00</span>
                        <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Product Area Start -->
<div class="product-area pb-100px">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <div class="col-12">
                <!-- Tab Start -->
                <div class="tab-slider d-md-flex justify-content-md-between align-items-md-center">
                    <ul class="product-tab-nav nav justify-content-start align-items-center">
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#newarrivals">New Arrivals</button>
                        </li>
                        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#toprated">Top Rated</button>
                        </li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#featured">Featured</button>
                        </li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
        </div>
        <!-- Section Title & Tab End -->
        <div class="row">
            <div class="col">
                <div class="tab-content mt-60px">
                    <!-- 1st tab start -->
                    <div class="tab-pane fade show active" id="newarrivals">
                        <div class="row mb-n-30px">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt'=>'Product Image'])?>
<!--                                            <img src="assets/images/product-image/1.webp" alt="Product" />-->
                                            <?= Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt'=>'Product Image','class'=>'hover-image'])?>
<!--                                            <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= Html::img(Yii::getAlias('@web/images/product-image/2.webp'),['alt'=>'Product Three'])?>
<!--                                            <img src="assets/images/product-image/2.webp" alt="Product" />-->
                                            <?= Html::img(Yii::getAlias('@web/images/product-image/2.webp'),['alt'=>'Product Three', 'class' => 'hover-image'])?>
<!--                                            <img class="hover-image" src="assets/images/product-image/2.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="old">$48.50</span>
                                                <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= Html::img(Yii::getAlias('@web/images/product-image/3.webp'),['alt' =>'Product'])?>
<!--                                            <img src="assets/images/product-image/3.webp" alt="Product" />-->
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/3.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Music Box
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/4.webp'),['alt' =>'Product'])?>
<!--                                            <img src="assets/images/product-image/4.webp" alt="Product" />-->
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/4.webp'),['alt' =>'Product','class' =>'hover-image'])?>
<!--                                            <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/5.webp'),['alt' =>'Product'])?>
<!--                                            <img src="assets/images/product-image/5.webp" alt="Product" />-->
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/5.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img class="hover-image" src="assets/images/product-image/5.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="sale">-8%</span>
                                            <span class="new">Sale</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/6.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/6.webp'),['alt' =>'Product','class' =>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/6.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/6.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Table Camera
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="old">$138.50</span>
                                                <span class="new">$112.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/7.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/7.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img src="assets/images/product-image/7.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Round Pocket Router
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/8.webp'),['alt' =>'Product'])?>
<!--                                            <img src="assets/images/product-image/8.webp" alt="Product" />-->
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/8.webp'),['alt' =>'Product','class' =>'hover-image'])?>
<!--                                            <img class="hover-image" src="assets/images/product-image/8.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="old">$260.00</span>
                                                <span class="new">$238.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->
                    <div class="tab-pane fade" id="toprated">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img src="assets/images/product-image/1.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/2.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/2.webp'),['alt' =>'Product','class'  =>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/2.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/2.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="old">$48.50</span>
                                                <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/3.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/3.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img src="assets/images/product-image/3.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Music Box
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/4.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img src="assets/images/product-image/4.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/5.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/5.webp'),['alt' =>'Product','class' =>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/5.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/5.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="sale">-8%</span>
                                            <span class="new">Sale</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/6.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/6.webp'),['alt' =>'Product', 'class' =>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/6.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/6.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Table Camera
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="old">$138.50</span>
                                                <span class="new">$112.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/7.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/7.webp'),['alt' =>'Product','class' =>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/7.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Round Pocket Router
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/8.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/8.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img src="assets/images/product-image/8.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/8.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="old">$260.00</span>
                                                <span class="new">$238.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    <div class="tab-pane fade" id="featured">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt' =>'Product','class' =>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/1.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/2.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/2.webp'),['alt' =>'Product','class' =>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/2.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/2.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="old">$48.50</span>
                                                <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/3.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/3.webp'),['alt' =>'Product','class' =>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/3.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Music Box
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/4.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img src="assets/images/product-image/4.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/5.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/5.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img src="assets/images/product-image/5.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/5.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="sale">-8%</span>
                                            <span class="new">Sale</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/6.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/6.webp'),['alt' =>'Product','class' => 'hover-image'])?>
<!--                                            <img src="assets/images/product-image/6.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/6.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Table Camera
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="old">$138.50</span>
                                                <span class="new">$112.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/7.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt' =>'Product', 'class' =>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/7.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Round Pocket Router
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/8.webp'),['alt' =>'Product'])?>
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/product-image/8.webp'),['alt' =>'Product','class'=>'hover-image'])?>
<!--                                            <img src="assets/images/product-image/8.webp" alt="Product" />-->
<!--                                            <img class="hover-image" src="assets/images/product-image/8.webp" alt="Product" />-->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                            </a>
                                        </h5>
                                        <span class="price">
                                                    <span class="old">$260.00</span>
                                                <span class="new">$238.50</span>
                                                </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd tab end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->
<!-- Feature product area start -->
<div class="feature-product-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title">Featured Offers</h2>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 mb-md-35px mb-lm-35px">
                <div class="single-feature-content">
                    <div class="feature-image">
                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/feature-image/1.webp'),['alt' =>'WEBP'])?>
<!--                        <img src="assets/images/feature-image/1.webp" alt="">-->
                    </div>
                    <div class="top-content">
                        <h4 class="title"><a href="single-product.html">Bluetooth Headphone </a></h4>
                        <span class="price">
                            <span class="old"><del>$48.50</del></span>
                                <span class="new">$38.50</span>
                                </span>
                    </div>
                    <div class="bottom-content">
                        <div class="deal-timing">
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <a href="single-product-variable.html" class="btn btn-primary  m-auto"> Shop
                            Now </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="feature-right-content">
                    <div class="image-side">
                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/feature-image/2.webp'),['alt' =>'Product'])?>
<!--                        <img src="assets/images/feature-image/2.webp" alt="">-->
                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                    class="pe-7s-shopbag"></i></button>
                    </div>
                    <div class="content-side">
                        <div class="deal-timing">
                            <span>End In:</span>
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <div class="prize-content">
                            <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                            <span class="price">
                            <span class="old">$48.50</span>
                                    <span class="new">$38.50</span>
                                    </span>
                        </div>
                        <div class="product-feature">
                            <ul>
                                <li>Predecessor : <span>None.</span></li>
                                <li>Support Type : <span>Neutral.</span></li>
                                <li>Cushioning : <span>High Energizing.</span></li>
                                <li>Total Weight : <span> 300gm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feature-right-content mt-30px">
                    <div class="image-side">
                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/feature-image/3.webp'),['alt' =>'Product'])?>
<!--                        <img src="assets/images/feature-image/3.webp" alt="">-->
                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                    class="pe-7s-shopbag"></i></button>
                    </div>
                    <div class="content-side">
                        <div class="deal-timing">
                            <span>End In:</span>
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <div class="prize-content">
                            <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                            <span class="price">
                            <span class="old">$48.50</span>
                                    <span class="new">$38.50</span>
                                    </span>
                        </div>
                        <div class="product-feature">
                            <ul>
                                <li>Predecessor : <span>None.</span></li>
                                <li>Support Type : <span>Neutral.</span></li>
                                <li>Cushioning : <span>High Energizing.</span></li>
                                <li>Total Weight : <span> 300gm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature product area End -->
<!-- Testimonial area start -->
<div class="trstimonial-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center m-0">
                    <h2 class="title">Client Feedback</h2>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Swiper -->
                <div class="swiper-container content-top slider-nav-style-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-inner">
                                <div class="testi-content">
                                    <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                    </p>
                                </div>
                                <div class="testi-author">
                                    <div class="author-image">
                                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/testimonial/1.png'),['alt' =>'Product','class' =>'img-responsive'])?>
<!--                                        <img class="img-responsive" src="assets/images/testimonial/1.png" alt="">-->
                                    </div>
                                    <div class="author-name">
                                        <h4 class="name">Regan Rosen<span>Client</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-inner">
                                <div class="testi-content">
                                    <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                    </p>
                                </div>
                                <div class="testi-author">
                                    <div class="author-image">
                                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/testimonial/1.png'),['alt' =>'Product','class' =>'img-responsive'])?>
<!--                                        <img class="img-responsive" src="assets/images/testimonial/1.png" alt="">-->
                                    </div>
                                    <div class="author-name">
                                        <h4 class="name">Regan Rosen<span>Client</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-inner">
                                <div class="testi-content">
                                    <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                    </p>
                                </div>
                                <div class="testi-author">
                                    <div class="author-image">
                                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/testimonial/1.png'),['alt' =>'Product','class' =>'img-responsive'])?>
<!--                                        <img class="img-responsive" src="assets/images/testimonial/1.png" alt="">-->
                                    </div>
                                    <div class="author-name">
                                        <h4 class="name">Regan Rosen<span>Client</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-inner">
                                <div class="testi-content">
                                    <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                    </p>
                                </div>
                                <div class="testi-author">
                                    <div class="author-image">
                                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/testimonial/1.png'),['alt' =>'Product','class' =>'img-responsive'])?>
<!--                                        <img class="img-responsive" src="assets/images/testimonial/1.png" alt="">-->
                                    </div>
                                    <div class="author-name">
                                        <h4 class="name">Regan Rosen<span>Client</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial area end-->
<!-- Brand area start -->
<div class="brand-area pt-100px pb-100px">
    <div class="container">
        <div class="brand-slider swiper-container">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/partner/1.png'),['alt' =>'Product','class' =>'img-fluid'])?>
<!--                        <img class=" img-fluid" src="assets/images/partner/1.png" alt="" />-->
                    </a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/partner/2.png'),['alt' =>'Product','class' =>'img-fluid'])?>
<!--                        <img class=" img-fluid" src="assets/images/partner/2.png" alt="" />-->
                    </a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/partner/3.png'),['alt' =>'Product','class' =>'img-fluid'])?>
<!--                        <img class=" img-fluid" src="assets/images/partner/3.png" alt="" />-->
                    </a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/partner/4.png'),['alt' =>'Product','class' =>'img-fluid'])?>
<!--                        <img class=" img-fluid" src="assets/images/partner/4.png" alt="" />-->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand area end -->
<!-- Blog area start from here -->
<div class="main-blog-area pb-100px">
    <div class="container">
        <!-- section title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-30px0px">
                    <h2 class="title">Latest Blog</h2>
                    <p> There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <!-- section title start -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 mb-xs-30px">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="blog-single-left-sidebar.html">
                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/blog-image/1.webp'),['alt' =>'Product','class' =>'img-responsive w-100'])?>
<!--                            <img src="assets/images/blog-image/1.webp" class="img-responsive w-100" alt="">-->
                        </a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date line-height-1">
                            <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                            <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Wild Nick</a></span>
                        </div>
                        <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">10 Quick Tips About Smart Product</a></h5>
                        <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                        <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
            <div class="col-lg-6 col-sm-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="blog-single-left-sidebar.html">
                            <?= \yii\helpers\Html::img(Yii::getAlias('@web/images/blog-image/2.webp'),['alt' =>'Product','class' =>'img-responsive w-100'])?>
<!--                            <img src="assets/images/blog-image/2.webp" class="img-responsive w-100" alt="">-->
                        </a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date line-height-1">
                            <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                            <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Oaklee Odom</a></span>
                        </div>
                        <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">5 Real-Life Lessons About Smart Product</a></h5>
                        <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                        <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
        </div>
    </div>
</div>
<!-- Blog area end here -->