<?php

return [
    'class' => 'yii\swiftmailer\Mailer',
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host'  => '127.0.0.1',
        'port'  => '1025',
    ],
    'messageConfig' => [
        'charset' => 'UTF-8',
        'from'    => 'noreply@mydomain.com',
    ],
];
