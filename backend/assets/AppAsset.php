<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'plugins/simplebar/css/simplebar.css',
        'plugins/perfect-scrollbar/css/perfect-scrollbar.css',
        'plugins/metismenu/css/metisMenu.min.css',
        'plugins/datatable/css/dataTables.bootstrap5.min.css',
        'css/pace.min.css',
        'css/bootstrap.min.css',
        'css/app.css',
        'css/icons.css',
        'css/dark-theme.css',
        'css/semi-dark.css',
        'css/header-colors.css',
    ];
    public $js = [
        'js/pace.min.js',
        'js/bootstrap.bundle.min.js',
        'js/jquery.min.js',
        'plugins/simplebar/js/simplebar.min.js',
        'plugins/metismenu/js/metisMenu.min.js',
        'plugins/perfect-scrollbar/js/perfect-scrollbar.js',
        'plugins/apexcharts-bundle/js/apexcharts.min.js',
        'plugins/datatable/js/jquery.dataTables.min.js',
        'plugins/datatable/js/dataTables.bootstrap5.min.js',
        'js/index.js',
        'js/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
