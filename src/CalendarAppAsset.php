<?php

namespace AnimatedCalendar\Yii2AnimatedCalendar;

use yii\web\AssetBundle;

class CalendarAppAsset extends AssetBundle
{
    public $sourcePath = '@app/vendor/animated-calendary/yii2-animated-calendary/src';

    public $css = [
        'css/calendar-gc.css',
    ];
    public $js = [
        'js/calendar-gc.js',
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
//    ];

}