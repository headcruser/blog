<?php namespace core\ORM\Storage\Entradas;

use core\ORM\Storage\MysqlStorageAdapter;
use core\model\Entradas;
use core\ORM\Database\Driver;
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
        parent::__construct('entradas',$driver);
    }

    public function save(Entradas $data)
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