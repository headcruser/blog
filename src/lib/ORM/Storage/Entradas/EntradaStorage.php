<?php namespace System\ORM\Storage\Entradas;

use System\ORM\Storage\MysqlStorageAdapter;
use core\lib\Model\Model;
use System\ORM\Database\Driver;

/**
* EntradaStorage
*
* Se encaga de realizar consultas especializadas para las entradas
* por ejemplo en el caso de ejecucion de vistas.
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class EntradaStorage extends MysqlStorageAdapter
{
    public function __construct(Driver $driver)
    {
        parent::__construct('entradas', $driver);
    }

    public function save(Model $data)
    {
        print("Guardando Tabla " .$this->table);
        echo "<pre>";
        d($data);
    }
    public function getColumns():array
    {
        return $this->columns;
    }
}
