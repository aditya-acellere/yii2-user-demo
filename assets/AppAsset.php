<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class AppAsset extends AssetBundle
{
    /** @inheritdoc */
    public $basePath = '@webroot';

    /** @inheritdoc */
    public $baseUrl = '@web';

    /** @inheritdoc */
    public $css = [
        'css/site.css',
    ];

    /** @inheritdoc */
    public $js = [
    ];

    /** @inheritdoc */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapThemeAsset',
    ];
}
