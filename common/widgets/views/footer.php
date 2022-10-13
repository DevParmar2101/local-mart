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
                                    <?= Html::img(Yii::getAlias('@web/images/logo/footer-logo.png'),['class' => 'frontend-logo-image'])?>
                                </a>
                            </div>
                            <p class="about-text">Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore
                            </p>
                            <ul class="link-follow">
                                <li>
                                    <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook"
                                                                                                                         aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
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
                                        <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                        <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                        <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                        <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                        <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
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
                                        <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                        <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                        <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                        <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                        <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
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
                                <p class="address">Address: Your Address Goes Here.</p>
                                <p class="phone">Phone/Fax:<a href="tel:0123456789"> 0123456789</a></p>
                                <p class="mail">Email:<a href="mailto:demo@example.com"> demo@example.com</a></p>
                                <p class="mail"><a href="https://demo@example.com"> demo@example.com</a></p>
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
