<?php
require 'public/index.php';

return[
    'paths'=>[
        'migrations'    =>__DIR__.DS.'db'.DS.'migrations',
        'seeds'         =>__DIR__.DS.'db'.DS.'seeds'
    ],
    'environments'=>[
        'default_database'  => 'development',
        'development'=>[
                    'adapter'=> 'mysql',
                    'host'=> $app->getContainer()->get('database.host'),
                    'name'=> $app->getContainer()->get('database.name'),
                    'user'=> $app->getContainer()->get('database.user'),
                    'pass'=> $app->getContainer()->get('database.password'),
                    'port'=> $app->getContainer()->get('database.port'),
                    'charset'=> 'utf8',
        ]
    ]
];
