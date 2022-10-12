<?php
use yii\helpers\Html;
?>
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <?= Html::img(Yii::getAlias('@web/images/logo-icon.png'),['class' =>'logo-icon','alt' => 'logo icon'])?>
        </div>
        <div>
            <h4 class="logo-text">Dashtrans</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Home Page Content</a>
                </li>
                <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Extra Page Content</a>
                </li>
            </ul>
        </li>
    <!--end navigation-->
</div>