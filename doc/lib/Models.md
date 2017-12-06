# Sistema Models

Es un sistema para representar mediante un objeto, las tablas de la base de datos del sistema. Es una clase abstracta que tiene las siguientes caracteristicas:  
    
    /** Contiene las propiedades de manera Dinámica
    * @var array $propierties
    */
    protected $properties = array();

Estas propiedades son las mismas columnas, debdioa que no se ha desarrollado un sistema mas poderoso. Finalmente esta es una propuesta sencilla, pero existen solucines como doctrine o eloquent. 

Las siguientes propiedades, especifican el nombre del modelo y un metodo para poder obtener el nombre de las columnas de la tabla.  Ademas se define una propiedad para establecer el nombre.

    protected $nameModel;        
    
    /**
     * Obtiene las columnas del 
     * @return type object Arreglo de objetos con las columnas especificadas
     */
    public function getColumns():array
    {
        return $this->properties;
    }

Para hacer uso de esta clase, simplemente hay que utilizar el mecanismo de herencia que proporciona php, por ejemplo: 


    final class Entradas extends Model
    {
        private $_id;
        private $_autor_id;
        private $_url;
        private $_titulo;
        private $_texto;
        private $_fecha;
        private $_activa;

        protected $properties = array('id',
                                        'autor_id',
                                        'url',
                                        'titulo',
                                        'texto',
                                        'fecha',
                                        'activa');
        /**
        * __construct
        * 
        * Construye el modelo Entradas
        */
        public function __construct(string $id=null,
                                    string $autor_id=null,
                                    string $url=null,
                                    string $titulo=null,
                                    string $texto=null,
                                    string $fecha=null,
                                    string $activa=null){
            $this->_id=$id;
            $this->_autor_id=$autor_id;
            $this->_url=$url;
            $this->_titulo=$titulo;
            $this->_texto=$texto;
            $this->_fecha=$fecha;
            $this->_activa=$activa;
        }
    }

En este caso, el usuario puede definir su propia logica para manejar el objeto. Para el manejo de los registros se utiliza el motor ORM, el cual proporciona repositorios, para manejar las consultas a la base de datos. 