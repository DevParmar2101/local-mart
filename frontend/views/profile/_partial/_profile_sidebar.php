<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="col-sm-12 col-md-3 col-lg-3">
    <!-- Nav tabs -->
    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
        <ul role="tablist" class="nav flex-column dashboard-list">
            <li>
                <a href="<?= Url::toRoute('profile/account')?>" data-bs-toggle="tab" class="nav-link active">Account Details</a>
            </li>
            <li>
                <a href="<?= Url::toRoute('profile/change-password')?>" data-bs-toggle="tab" class="nav-link">Change Password</a>
            </li>
            <li> <a href="<?= Url::toRoute('profile/wishlist')?>" data-bs-toggle="tab" class="nav-link"> Wishlist</a></li>
            <li> <a href="<?= Url::toRoute('profile/order')?>" data-bs-toggle="tab" class="nav-link">My Order</a></li>
            <li>
                <?= Html::a('Logout',['site/logout'],['data' => ['method' => 'post'],'class' => 'nav-link'])?>
            </li>

        </ul>
    </div>
</div>