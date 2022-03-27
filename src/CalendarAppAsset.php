<?php


use yii\web\AssetBundle;

class CalendarAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'src/css/calendar-gc.css',
    ];
    public $js = [
        'src/js/calendar-gc.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];

}