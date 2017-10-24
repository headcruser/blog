<?php namespace core\ORM\Storage\Usuario;

use core\ORM\Storage\MysqlStorageAdapter;
use core\model\Usuario;
use core\ORM\Database\Driver;

final class UsuarioStorage extends MysqlStorageAdapter
{
    public function __construct(Driver $driver)
    {
        parent::__construct('usuarios',$driver);
    }

    public function save(Usuario $data)
    {
        print("Guardando Tabla " .$this->table);
        echo "<pre>";
        d($data);
    }
    
}