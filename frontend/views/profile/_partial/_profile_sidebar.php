<?php

use common\components\BaseHelper;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="col-sm-12 col-md-3 col-lg-3">
    <!-- Nav tabs -->
    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
        <ul role="tablist" class="nav flex-column dashboard-list">
            <li>
                <a href="<?= Url::toRoute('profile/account')?>" class="nav-link <?= BaseHelper::validateAction('profile','account') ?'active':'' ?>">Account Details</a>
            </li>
            <li>
                <a href="<?= Url::toRoute('profile/change-password')?>" class="nav-link <?= BaseHelper::validateAction('profile','change-password') ?'active':'' ?>">Change Password</a>
            </li>
            <li> <a href="<?= Url::toRoute('profile/wishlist')?>" class="nav-link <?= BaseHelper::validateAction('profile','wishlist') ?'active':'' ?>"> Wishlist</a></li>
            <li> <a href="<?= Url::toRoute('profile/order')?>" class="nav-link <?= BaseHelper::validateAction('profile','order') ?'active':'' ?>">My Order</a></li>
            <li>
                <?= Html::a('Logout',['site/logout'],['data' => ['method' => 'post'],'class' => 'nav-link'])?>
            </li>

        </ul>
    </div>
</div>