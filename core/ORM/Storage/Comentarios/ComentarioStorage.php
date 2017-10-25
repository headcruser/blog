<?php namespace core\ORM\Storage\Comentarios;

use core\ORM\Storage\MysqlStorageAdapter;
use core\model\Comentario;
use core\ORM\Database\Driver;
/**
* ComentarioStorage
*
* Se encaga de realizar consultas especializadas para los comentarios
* por ejemplo en el caso de ejecucion de vistas. 
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
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