<?php

/**
 * Local common config for console and web applications.
 */

return [
    'components' => [
        'db' => [
            'class'    => 'yii\db\Connection',
            'dsn'      => 'mysql:host=localhost;dbname=yii2-user',
            'username' => 'root',
            'password' => '',
            'charset'  => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
    ],
];
