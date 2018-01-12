<?php namespace System\ORM\Storage\Usuario;

use System\ORM\Storage\MysqlStorageAdapter;
use core\model\Usuario;
use System\ORM\Database\Driver;

/**
* UsuarioStorage
*
* Se encaga de realizar consultas especializadas para los Usuario
* por ejemplo en el caso de ejecucion de vistas.
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class UsuarioStorage extends MysqlStorageAdapter
{
    public function __construct(Driver $driver)
    {
        parent::__construct('usuarios', $driver);
    }

    public function save(Usuario $data)
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
