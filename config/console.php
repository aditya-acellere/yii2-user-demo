<?php

return [
    'id' => 'yii2-user-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db'     => require(__DIR__ . '/local/db.php'),
        'mailer' => require(__DIR__ . '/local/mailer.php'),
    ],
];