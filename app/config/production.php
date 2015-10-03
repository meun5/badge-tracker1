<?php

return [
    'app'   => [
        'url'   => 'http://example.org',
        'name'   => 'Merit-Tracker',
        'version'   => '0.1.3.2',
        'author'   => 'Alex Young',
        'hash'  => [
            'algo'  => PASSWORD_BCRYPT,
            'cost'  => 25,
        ],
        'webmaster' => 'clamy4@msn.com',
    ],

    'db'    => [
        'driver'    => 'mysql',
        'host'      => 'sql.example.org',
        'name'      => 'database-name',
        'username'  => 'user',
        'password'  => 'password',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ],

    'auth'  => [
        'session'   => 'user_id',
        'remember'  => 'user_rem',
    ],

    'mail'  => [
        'smtp_auth'     => true,
        'smtp_secure'   => 'tls',
        'host'          => 'smtp.example.org',
        'username'      => 'username@example.org',
        'password'      => 'password',
        'port'          => 587,
        'html'          => true,
    ],

    'twig'  => [
        'debug'     => false,
    ],
    
    'csrf'  => [
        'key'   => 'csrf_token',
    ],

    'checkout' => [
        'session' => 'checkout_session',
    ],
];
