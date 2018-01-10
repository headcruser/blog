<?php
require 'public/index.php';

return[
    'paths'=>[
        'migrations'    =>__DIR__.DS.'db',
        'seeds'         =>__DIR__.DS.'db'
    ],
    'environments'=>[
        'default_database'  => 'development',
        'development'       =>[
                        'adapter'=> ENGINE,
                        'host'  =>HOST,
                        'name'=> NAME,
                        'user'=> USER,
                        'pass'=> PASS,
                        'port'=> PORT,
                        'charset'=> CHARSET,
                    ]
    ]
];
