<?php

use common\models\StoreSubCategory;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $sub_categories StoreSubCategory */
?>
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