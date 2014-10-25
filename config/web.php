<?php

use yii\helpers\ArrayHelper;

$config = [
    'id'         => 'yii2-user-demo',
    'name'       => 'Yii2-user',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
        ],
        'db'     => require(__DIR__ . '/local/db.php'),
        'mailer' => require(__DIR__ . '/local/mailer.php'),
    ],
];

return ArrayHelper::merge($config, require(__DIR__ . '/local/web.php'));

