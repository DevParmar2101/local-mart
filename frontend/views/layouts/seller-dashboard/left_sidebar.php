<?php

use common\components\BaseHelper;
use yii\helpers\Url;

?>

<div class="sidebar-widget-group">
    <div class="sidebar-widget">
        <h3 class="sidebar-title">Seller's Dashboard</h3>
        <div class="category-post">
            <ul>

                <li class="seller-dashboard <?= BaseHelper::validateAction('site','index')?'active':''?>">
                    <a href="<?= Url::toRoute('site/index')?>" class="selected m-0">Dashboard </a>
                </li>

                <li class="seller-dashboard <?= BaseHelper::validateAction('site','shop-list')?'active':''?>">
                    <a href="<?= Url::toRoute('site/shop-list')?>" class="selected m-0">Shop List </a>
                </li>

                <li class="seller-dashboard <?= BaseHelper::validateAction('product','index')?'active':''?>">
                    <a href="<?= Url::toRoute('product/index')?>" class="selected m-0">Product List </a>
                </li>

            </ul>
        </div>
    </div>
</div>
