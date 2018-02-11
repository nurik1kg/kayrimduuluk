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
//        'css/site.css',
        'style/css/bootstrap.css',
        'style/css/style.css',
        'style/css/font-awesome.min.css',
    ];
    public $js = [
//        'style/js/bootstrap.min.js',
//        'https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js',
//        'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
