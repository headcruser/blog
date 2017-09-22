# SUBSISTEMA ORM.

Minimodulo para la gestión del Mapeo de objetos de la base de datos.
* * *
## Database
* * *
Este módulo es encargado unicamente de realizar la conexion con la base de datos. Este módulo se divide en varias secciones, las cuales son indispensables para su buen funcionamiento  

1. Connection
2. Drivers
3. Exceptions
4. Interfaces

### Connection
El funcionamiento comienza con IConnection, la cual es una interface que provee de metodos para la configuración de la misma. 
Para construir un conexión, requiere de un driver para realizar la conexión de la siguiente manera:

    $driver= Mysql | Postgres ..
    $connection = new Connection([
		'driver' => $driver
	]);

Para trabajar con un driver, se necesita utilizar la clase creada ,la cual se encuentra dentro de la carpeta /Drivers. 

los drivers soportados son 
* Mysql
* postgres
* Sqlserver


### Drivers
Esta sección comienza con una clase abstracta llamada **Drivers**, la cual define los métodos para administrar una conexión con la base de datos. La finalidad es tener una configuración basica para poder trabjar con diversos drivers entre los cuales destacan:
- mysql 
- postgres 

La finalidad es poder agregar diversos driver que proporcionen flexibilidad a la hora de cambiar de gestor de base de datos sin modificar ninguna linea de código. Los drivers expecializados podran extender de este driver generico, y podra ser implementado por las clases en concreto.

Para construir un driver, se tiene la siguiente estructura. 

      use core\ORM\Database\Driver\MysqlDriver;
      use core\ORM\Database\Connection;

      $driver = new MysqlDriver([
 	    'database' => 'test',
 	    'username' => 'root',
 	    'password' => 'secret']);

De esta manera, en el constructor se le puede asignar un parámetro que especifique un array con las configuracion deseada.  
En caso de no asignar ningun parámetro, tomara la conexion por defecto especificada en el driver correspondiente.

 `$driver = new MysqlDriver();`

 > Para hacer uso de estas clases, hay que llamar al namespace correspondiente _`core\ORM\Database\Driver\MysqlDriver`_

 ##### PDOTraits
 En versiones de php 5 en adelante, se hace uso de una caracteristica llamada Trait la cual es una mezcla entre una interfaz y una clase abstracta, en donde se pueden definir métodos y variables, sin la necesidad de instanciar un objeto. 
 
 Este principio es aplicado para realizar la conexión mediante PDO, el cual es el encargado de realizar la conexión.