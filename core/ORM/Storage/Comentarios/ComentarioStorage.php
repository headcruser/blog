<?php namespace core\ORM\Storage\Comentarios;

use core\ORM\Storage\MysqlStorageAdapter;
use core\model\Comentario;
use core\ORM\Database\Driver;

final class ComentarioStorage extends MysqlStorageAdapter
{
    public function __construct(Driver $driver)
    {
        parent::__construct('comentarios',$driver);
    }

    public function save(Comentario $data)
    {
        print("Guardando Tabla " .$this->table);
        echo "<pre>";
        d($data);
    }
}