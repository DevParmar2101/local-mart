<?php

use common\models\PageContent;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var $pages PageContent*/

?>

<div class="footer-area">
    <div class="footer-container">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                        <div class="single-wedge">
                            <div class="footer-logo">
                                <a href="<?= Url::toRoute('/')?>">
                                    <?= Yii::$app->global->logo_dark?>
                                </a>
                            </div>
                            <h4 class="footer-herading">Follow Us</h4>

                            <ul class="link-follow">
                                <li class="">
                                    <a class="m-0" title="Twitter" target="_blank" href="<?= Yii::$app->global->facebook_link?>">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="<?= Yii::$app->global->twitter_link?>">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a title="Instagram" target="_blank" rel="noopener noreferrer" href="<?= Yii::$app->global->instagram_link?>"><i class="fa fa-instagram" aria-hidden="true"></i>
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
                                        <?php foreach ($pages as $page){
                                            /** @var $page PageContent*/
                                            ?>
                                            <li class="li">
                                                <a class="single-link" href="<?= Url::toRoute('page/'.$page->slug)?>"><?= $page->title?></a>
                                            </li>
                                        <?php }?>
                                        <li class="li">
                                            <a class="single-link" href="<?= Url::toRoute('site/contact')?>">Contact</a>
                                        </li>
                                        <li class="li">
                                            <a class="single-link" href="
                                            <?=
                                            Yii::$app->user->isGuest
                                                ?Url::toRoute('site/signup')
                                                :Url::toRoute('site/seller')
                                            ?>
                                            ">Become a Seller
                                            </a>
                                        </li>
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
                                        <li class="li"><a class="single-link" href="<?= Url::toRoute(['profile/account'])?>">My Account</a></li>
                                        <li class="li"><a class="single-link" href="<?= Url::toRoute(['profile/change-password'])?>">Change Password</a></li>
                                        <li class="li"><a class="single-link" href="<?= Url::toRoute(['site/contact'])?>">Contact</a></li>
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
                                <p class="address"><b>Address</b> : <?= Yii::$app->global->address?></p>
                                <p class="phone">Phone/Fax:<a href="tel:<?= Yii::$app->global->contact_number?>"> <?= Yii::$app->global->contact_number?></a></p>
                                <p class="mail">Email:<a href="mailto:<?= Yii::$app->global->email?>"> <?= Yii::$app->global->email?></a></p>
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
