<?php

use common\components\GlobalProperty;
use yii\rbac\DbManager;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => DbManager::class,
        ],
        'global' => [
            'class' => GlobalProperty::class,
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'urlManagerAdmin' => [
            'class' => \yii\web\UrlManager::class,
            'baseUrl' => '/admin/',
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
    ],
];
