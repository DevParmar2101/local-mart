<?php

use common\models\Product;
use common\models\ProductImage;
use yii\helpers\Url;

/* @var $model Product*/
/* @var $product_image ProductImage*/
/* @var $products Product*/
$this->title = $model->product_name;
?>
<!-- Product Details Area Start -->
<div class="product-details-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <!-- Swiper -->
                <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">
                        <?php foreach ($product_image as $image) {
                            /* @var $image ProductImage*/
                            ?>
                            <div class="swiper-slide">
                                <?= $image->getImage('image','','img-responsive m-auto')?>
                                <a class="venobox full-preview" data-gall="myGallery" href="
                            <?= Yii::$app->urlManagerAdmin->createAbsoluteUrl(['uploads/product_image/'.$image->image])?>">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                    <div class="swiper-wrapper">
                        <?php foreach ($product_image as $image) {
                            /* @var $image ProductImage*/
                            ?>
                            <div class="swiper-slide">
                                <?= $image->getImage('image','','img-responsive m-auto')?>
                            </div>
                        <?php }?>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                <div class="product-details-content quickview-content ml-25px">
                    <h2>Modern Smart Phone</h2>
                    <div class="pricing-meta">
                        <ul class="d-flex">
                            <li class="new-price"><?= Yii::$app->formatter->asCurrency($model->product_price)?></li>
                        </ul>
                    </div>
                    <div class="pro-details-rating-wrap">
                        <div class="rating-product">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <span class="read-review"><a class="reviews" href="#">(5 Customer Review)</a></span>
                    </div>
                    <p class="mt-30px"><?= $model->short_description?></p>
                    <div class="product-details-table table-responsive pro-details-quality d-none">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="quantity d-flex">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#"><?= $model->product_name?></a></td>
                                <td><span class="amount">$18.00</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="quantity d-flex">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#">Smart Music Box</a></td>
                                <td><span class="amount">$18.00</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                        <span>SKU:</span>
                        <ul class="d-flex">
                            <li>
                                <a href="#"><?= $model->uuid?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                        <span>Categories: </span>
                        <ul class="d-flex">
                            <li>
                                <a href="#"><?= $model->storeCategory->category_name?> > </a>
                            </li>
                            <li>
                                <a href="#"><?= $model->storeSubCategory->sub_category?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="pro-details-quality">
                        <div class="pro-details-cart">
                            <button class="add-cart m-0"> Add To
                                Cart</button>
                        </div>
                        <div class="pro-details-compare-wishlist pro-details-wishlist ">
                            <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="pro-details-compare-wishlist pro-details-wishlist ">
                            <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- product details description area start -->
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <button data-bs-toggle="tab" data-bs-target="#des-details2">Information</button>
                        <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Description</button>
                        <button data-bs-toggle="tab" data-bs-target="#des-details3">Reviews (02)</button>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details2" class="tab-pane">
                            <div class="product-anotherinfo-wrapper text-start">
                                <?= $model->information?>
                            </div>
                        </div>
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <?= $model->description?>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="review-wrapper">
                                        <div class="single-review">
                                            <div class="review-img">
                                                <img src="assets/images/review-image/1.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>
                                                        Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                        cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper
                                                        euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-review child-review">
                                            <div class="review-img">
                                                <img src="assets/images/review-image/2.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                        cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper
                                                        euismod vehicula.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="ratting-form-wrapper pl-50">
                                        <h3>Add a Review</h3>
                                        <div class="ratting-form">
                                            <form action="#">
                                                <div class="star-box">
                                                    <span>Your rating:</span>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style">
                                                            <input placeholder="Name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style">
                                                            <input placeholder="Email" type="email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="rating-form-style form-submit">
                                                            <textarea name="Your Review" placeholder="Message"></textarea>
                                                            <button class="btn btn-primary btn-hover-color-primary " type="submit" value="Submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details description area end -->
            </div>
        </div>
    </div>
</div>
<!-- Product Area Start -->
<div class="product-area related-product">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center m-0">
                    <h2 class="title">Related Products</h2>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <!-- Section Title & Tab End -->
        <div class="row">
            <div class="col">
                <div class="new-product-slider swiper-container slider-nav-style-1">
                    <div class="swiper-wrapper">
                        <?php foreach ($products as $product) {
                            /* @var $product Product*/
//                        if ($product->created_at < date('Y-m-d',strtotime('-2 day')) && $product->created_at > date('Y-m-d', strtotime('-100 day'))   ){
                            ?>
                            <div class="swiper-slide">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                                <span class="new">New</span>
                                                <span class="sale <?= $product->discount?'d-block':'d-none'?>"><?= $product->discount?>%</span>
                                            </span>

                                    <div class="thumb">
                                        <a href="<?= Url::toRoute(['product/index','uuid' => $product->uuid])?>" class="image">
                                            <div class="parent-product-image">
                                                <?= $product->getImage('thumbnail_image','Product Image','index-product-image')?>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#"><?= $product->storeSubCategory->sub_category?></a></span>
                                        <h5 class="title">
                                            <a href="<?= Url::toRoute(['product/index','uuid' => $product->uuid])?>">
                                                <?= mb_strimwidth($product->product_name, 0, 50,"...")?>
                                            </a>
                                        </h5>
                                        <?php $discount = $product->discount * $product->product_price / 100;
                                        $discounted_price = $product->product_price - $discount;?>
                                        <span class="price">
                                                    <span class="old <?= $product->discount?'d-block':'d-none'?>">
                                                        <?= Yii::$app->formatter->asCurrency($product->product_price)?>
                                                    </span>
                                                    <span class="new">
                                                        <?= $product->discount?
                                                            Yii::$app->formatter->asCurrency($discounted_price):
                                                            Yii::$app->formatter->asCurrency($product->product_price)?>
                                                    </span>
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
                        <?php }?>
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
<!-- Product Area End -->