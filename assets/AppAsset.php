<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/blue.css',
        'css/ie-hacks.css',
        'css/superfish-custom.css',
        'css/jquery.tabs.css',

    ];
    public $js = [
        'js/prettyPhoto/css/prettyPhoto.css',
        'js/jquery_1.4.2.js',
        'js/jqueryui.js',
        'js/easing.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
