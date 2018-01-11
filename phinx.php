<?php
require 'index.php';

return[
    'paths'=>[
        'migrations'    =>__DIR__.DS.'db'.DS.'migrations',
        'seeds'         =>__DIR__.DS.'db'.DS.'seeds'
    ],
    'environments'=>[
        'default_database'  => 'development',
        'development'       =>[
                        'adapter'=> ENGINE,
                        'host'  =>SERVIDOR,
                        'name'=> DB_NAME,
                        'user'=> USUARIO,
                        'pass'=> PASSWORD,
                        'port'=> PUERTO,
                        'charset'=> ENCODING,
                    ]
    ]
];
