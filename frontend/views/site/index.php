<?php

/** @var yii\web\View $this */
/** @var $banner_content array */
/** @var $sub_categories array*/
/** @var $products array*/

use common\models\ExtraPageContent;
use common\models\StoreSubCategory;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <?php foreach ($banner_content as $content){
                /** @var $content ExtraPageContent */
            ?>
            <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="<?= '/../../backend/web/uploads/extra_page_content/'.$content->image?>">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category"><?= $content->title?></span>
                                <h2 class="title-1"><?= $content->sub_title?></h2>
                                <?php if ($content->show_button == ExtraPageContent::YES){?>
                                <a href="<?= $content->button_url?>" class="btn btn-primary text-capitalize"><?= $content->button_title?></a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <?= $content->getImage('child_image','Hero Image')?>
<!--                                    <img src="assets/images/hero/inner-img/hero-1-1.png" alt="" />-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
            <!-- Single slider item -->
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
            <?php foreach ($sub_categories as $category) {
                /** @var $category StoreSubCategory*/
                ?>
            <div class="col-md-6">
                <div class="single-banner nth-child-2 mb-30px mb-lm-30px mt-lm-30px is_featured_image">
                    <?= $category->getImage('image','Not Found','')?>
<!--                    <img src="assets/images/banner/4.webp" alt="">-->
                    <div class="banner-content nth-child-2">
                        <h3 class="title"><?= $category->sub_category?></h3>
                        <span class="category">From $95.00</span>
                        <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <?php }?>
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
        <?= $this->render('_partial/_product',[
                'products' => $products
        ])?>
    </div>
</div>
<!-- Product Area End -->
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
                                        <?= Html::img(Yii::getAlias('@web/images/testimonial/1.png'),['alt' =>'Product','class' =>'img-responsive'])?>
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
                                        <?= Html::img(Yii::getAlias('@web/images/testimonial/1.png'),['alt' =>'Product','class' =>'img-responsive'])?>
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
                                        <?= Html::img(Yii::getAlias('@web/images/testimonial/1.png'),['alt' =>'Product','class' =>'img-responsive'])?>
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
                                        <?= Html::img(Yii::getAlias('@web/images/testimonial/1.png'),['alt' =>'Product','class' =>'img-responsive'])?>
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
                            <?= Html::img(Yii::getAlias('@web/images/blog-image/1.webp'),['alt' =>'Product','class' =>'img-responsive w-100'])?>
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
                            <?= Html::img(Yii::getAlias('@web/images/blog-image/2.webp'),['alt' =>'Product','class' =>'img-responsive w-100'])?>
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