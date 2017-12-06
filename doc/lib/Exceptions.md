# Excepciones

El sistema de excepciones, simplemente son excepciones personalizadas que son utilizadas de la clase Exception, en donde simplemente se creo un error basico, y de ahi parten los demas tipos de exepciones personalizadas. 

Algunos de los atributos definidos en la clase de genericExcpetion son los siguientes: 
    
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

Toda clase que se desee implementar en el proyecto, debera tener la siguiente estructura. El modificador final, no es necesario, simplmente indica el fin de la herencia. 

    use core\Exception\GenericException;
    final class ClassNoFoundExeption extends GenericException
    {
        protected $_messageTemplate = 'La Clase no existe: %s';
    }