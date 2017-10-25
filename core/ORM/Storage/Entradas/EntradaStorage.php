<?php namespace core\ORM\Storage\Entradas;

use core\ORM\Storage\MysqlStorageAdapter;
use core\model\Entradas;
use core\ORM\Database\Driver;

final class EntradaStorage extends MysqlStorageAdapter
{
    public function __construct(Driver $driver)
    {
        parent::__construct('entradas',$driver);
    }

    public function save(Entradas $data)
    {
        print("Guardando Tabla " .$this->table);
        echo "<pre>";
        d($data);
    }
}