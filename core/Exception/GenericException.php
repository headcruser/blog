<?php namespace core\Exception;

use RuntimeException;

/**
* Excepcion General para el sistema
*
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class GenericException extends RuntimeException
{
    /**
     * Arreglo de atributos que son pasados en el constructos y son mostradas
     * para mostrar los errores al desarrollador.
     *
     * @var array
     */
    protected $_attributes = [];
    /**
     * Mensaje formateado mediante sprintf().
     *
     * @var string
     */
    protected $_messageTemplate = '';
    /**
     * Numero default de excepción
     *
     * @var int
     */
    protected $_defaultCode = 500;
    /**
     * Constructor.
     *
     * Crea Exepciones pudiendo especificar el codigo de exepcion perosnalizado
     * when debug = 0.
     *
     * @param string|array $Recibe un mensaje en formato de array o string, donde especifica
     *   Se puede acceder al mensaje, utilizando Exception::$_messageTemplate
     * @param int|null $code Codigo de error, sobre el estandar HTTP para los errores.
     * @param \Exception|null $previous the previous exception.
     */
    public function __construct($message, $code = null, $previous = null)
    {
        if (is_array($message)) {
            $this->_attributes = $message;
            $message = vsprintf($this->_messageTemplate, $message);
        }
        parent::__construct($message, $code, $previous);
    }
    /**
     * Obtiene un arreglo de atributos
     *
     * @return array
     */
    public function getAttributes():array
    {
        return $this->_attributes;
    }
}
