<?php namespace core\ORM\Database;

use Exception;

/**
* (Obsoleto) 
*  Configuración de la información del servidor
  * @class: DatabaseConfiguration
  * @project: BlogProyect
  * @date: 15-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
class DatabaseConfiguration
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $db_name;

    public function __construct()
    {
        //Obtener los argumentos de la función
		$params = func_get_args();
        
        //Obtener el numero de argumentos
		$num_params = func_num_args();
        
        //cada constructor de un número dado de parámtros tendrá un nombre de función
		//atendiendo al siguiente modelo __construct1() __construct2()...
        $funcion_constructor ='__construct'.$num_params;
        
        //compruebo si no hay constructor, Lanzo una excepción
        if (!method_exists($this,$funcion_constructor)) 
            throw new Exception('Número de argumentos Inválido.');
        
        //si existe la función, la invoco, reenviando los parámetros que recibí en el constructor original
		call_user_func_array(array($this,$funcion_constructor),$params);
		
    }
    
    
    /**
	 * Simulación de sobrecarga de constructor sin argumentos
	 * @return type void
	 */
    public function __construct0()
    {
        $this->host = SERVIDOR;
        $this->username = USUARIO;
        $this->password = PASSWORD;
        $this->db_name = DB_NAME;
    }

    /**
	 * Simulación de sobrecarga de constructor con 4 argumentos
	 * @param string 		$host 			Dirección del servidor
     * @param string 		$username 		Nombre del usuario
     * @param string 		$password 		Contraseña del usuario
     * @param string 		$db_name 		Nombre de la base de datos
	 * @return type void 
	 */
    public function __construct4(string $host, string $username, string $password,string $db_name)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    
    public function getDbName(): string 
    {
        return $this->db_name;
    }

    public function __toString(): string
    {
        return sprintf( "hola");
    }
}