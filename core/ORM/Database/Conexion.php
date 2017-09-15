<?php namespace core\ORM\Database;

/**se debe incluir cuando se utiliza namespace*/
use \PDO;

/**
 * Gestiona la conexión con la base de datos 
 * @author Headcruser
 * @version 2017_v1
 */
class Conexion
{
	public static $conexion;

	/**
	 * Abre la conexión con la base de datos 
	 * @return void 
	 */
    public static function openConection() 
    {
        if (!isset(self::$conexion)) 
        {
            try 
            {
                self::$conexion = new \PDO('mysql:host='.SERVIDOR.';dbname='.DB_NAME,
                						   USUARIO,
                						   PASSWORD);
                
                
                self::$conexion-> setAttribute
                						(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//mode error|ex
                self::$conexion -> exec("SET CHARACTER SET utf8"); // modo de codificación  universal

            } catch (PDOException $ex) 
            {
                die( "ERROR: " . $ex -> getMessage() . "<br>");
        	}
        }
    }

    /**
     * Cierra la conexion con la base de datos 
     * @return void
     */
    public static function closeConection() 
    {
        if (isset(self::$conexion)) 
            self::$conexion = null;
    }

    
    /** 
     * Obtiene la conexión de la base de datos 
     *	@return Conexion Referencia de la conexion
     */
    public static function getConection() 
    {
        if (!isset(self::$conexion)) 
            self::openConection();

         return self::$conexion;
    }
} //Fin de la clase 
 