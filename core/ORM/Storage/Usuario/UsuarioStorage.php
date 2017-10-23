<?php namespace core\ORM\Storage\Usuario;

use core\ORM\Storage\MysqlStorageAdapter;
use core\model\Usuario;

final class UsuarioStorage extends MysqlStorageAdapter
{
    public function __construct()
    {
        parent::__construct('usuarios');
    }

    public function save(Usuario $data)
    {
        print("Guardando Tabla " .$this->table);
        echo "<pre>";
        d($data);
    }
    
}