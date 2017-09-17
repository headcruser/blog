<?php
/**
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @since         3.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace core\Exception;
use RuntimeException;
/**
 * Clase base para las exepciones del sistema
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
     * @param string|array $message Either the string of the error message, or an array of attributes
     *   that are made available in the view, and sprintf()'d into Exception::$_messageTemplate
     * @param int|null $code The code of the error, is also the HTTP status code for the error.
     * @param \Exception|null $previous the previous exception.
     */
    public function __construct($message, $code = null, $previous = null)
    {
        if ($code === null) {
            $code = $this->_defaultCode;
        }
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