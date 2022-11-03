<?php

use common\models\UserStore;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var $model UserStore*/

$this->title = ' Seller Index';
?>

<h2>Welcome back, <?= $model->store_name ?></h2>

<!-- Shop Bottom Area Start -->
<div class="shop-bottom-area">
    <!-- Tab Content Area Start -->
    <div class="row">
        <div class="col">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="shop-grid">
                    <div class="row mb-n-30px">
                        <?php foreach ($model as $key){
                            /** @var $key UserStore*/
                            ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Product -->
                            <div class="product">
                                <div class="thumb">
                                    <a href="<?= Url::toRoute(['site/dashboard','uuid' => $key->uuid])?>" class="image">
                                        <?= $key->profile_image ? $key->getImage('profile_image','') : Html::img('@web/images/store/store-2.png')?>
                                        <?= $key->getImage('profile_image','@web/images/store-2.png','hover-image')?>
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        <a href="<?= Url::toRoute(['site/dashboard','uuid' => $key->uuid])?>">Store Name:-<?= $key->store_name?></a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab Content Area End -->
</div>
<!-- Shop Bottom Area End -->
