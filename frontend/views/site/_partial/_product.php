<?php

use common\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $products Product*/
?>

<div class="row">
    <div class="col">
        <div class="tab-content mt-60px">
            <!-- 1st tab start -->
            <div class="tab-pane fade show active" id="newarrivals">
                <div class="row mb-n-30px">
                    <?php foreach ($products as $product) {
                        /* @var $product Product*/
                        if ($product->created_at < date('Y-m-d',strtotime('-2 day')) && $product->created_at > date('Y-m-d', strtotime('-10 day'))   ){
                            ?>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                                <span class="new">New</span>
                                                <span class="sale <?= $product->discount?'d-block':'d-none'?>"><?= $product->discount?>%</span>
                                            </span>

                                    <div class="thumb">
                                        <a href="<?= Url::toRoute(['product/index','uuid' => $product->uuid])?>" class="image">
                                            <?= Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt'=>'Product Image'])?>
                                            <?= Html::img(Yii::getAlias('@web/images/product-image/1.webp'),['alt'=>'Product Image','class'=>'hover-image'])?>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#"><?= $product->storeSubCategory->sub_category?></a></span>
                                        <h5 class="title">
                                            <a href="<?= Url::toRoute(['product/index','uuid' => $product->uuid])?>">
                                                <?= $product->product_name?>
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
                        <?php } }?>
                </div>
            </div>
            <!-- 1st tab end -->
        </div>
    </div>
</div>
