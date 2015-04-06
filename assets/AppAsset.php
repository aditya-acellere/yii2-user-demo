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
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/styles/github.min.css',
    ];

    /** @inheritdoc */
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/highlight.min.js',
    ];

    /** @inheritdoc */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
