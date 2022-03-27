<?php


use yii\web\AssetBundle;

class CalendarAppAsset extends AssetBundle
{
    public $basePath = '@app/vendor/animated-calendary/yii2-animated-calendary';
    public $baseUrl = '@app/vendor/animated-calendary/yii2-animated-calendary';
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