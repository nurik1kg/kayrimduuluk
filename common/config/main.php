<?php
return [
    // set target language to be Kyrgyz
    'language' => 'kg-KG',

    // set source language to be Russian
//    'sourceLanguage' => 'ru-RU',

    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'frontend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'backend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                'username' => 'smtp.invest@gmail.com',
                'password' => 'std12345ok',
                'port' => '587', // Port 25 is a very common port too
                'encryption' => 'tls', // It is often used, check your provider or mail server specs
            ],
        ],
        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                'username' => 'smtp.invest@gmail.com',
                'password' => 'std12345ok',
                'port' => '587', // Port 25 is a very common port too
                'encryption' => 'tls', // It is often used, check your provider or mail server specs
            ],
        ],
    ],
];
