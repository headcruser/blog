<?php namespace core\lib\Model;

use core\lib\Model\Inflector;
use GUMP;
/**
  * Model
  *   
  * Define un modelo Generico para las entidades del sistema
  * 
  * @version: php7
  * @author: Daniel Martinez <headcruser@gmail.com>
  * @copyright: Daniel Martinez
  * @license https://opensource.org/licenses/mit-license.php MIT License
  */
abstract class Model
{
   use Inflector;

   /** Contiene las propiedades de manera Dinámica
    * @var array
    */
    protected $properties = array();

    /** Nombre del modelo  @var string $nameModel*/
    protected $nameModel;    

    public function __construct(array $prop = [])
    {
        $this->properties = $prop;
    }
    /**
     * Obtiene las columnas del 
     * @return type object Arreglo de objetos con las columnas especificadas
     */
    protected function getColumns():array
    {
        return $this->$properties();
    }
}