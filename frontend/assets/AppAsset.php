<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font.awesome.css',
        'css/pe-icon-7-stroke.css',
        'css/animate.min.css',
        'css/swiper-bundle.min.css',
        'css/venobox.css',
        'css/jquery-ui.min.css',
        'css/style.css',
        'css/custom.css',
        'https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
    ];
    public $js = [
        'js/vendor/bootstrap.bundle.min.js',
        'js/vendor/modernizr-3.11.2.min.js',
        'js/plugins/jquery.countdown.min.js',
        'js/plugins/swiper-bundle.min.js',
        'js/plugins/scrollUp.js',
        'js/plugins/venobox.min.js',
        'js/plugins/mailchimp-ajax.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap5\BootstrapAsset',
    ];
}
