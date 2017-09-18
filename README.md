# Descipción del funcionamiento del proyecto.

Este proyecto se construyo con la finalidad de seguir explorando la construcción de sitios web. Conforme paso el tiempo se fueron agregando diversos elementos, que mejoraban la apariencia y rendimiento de la pag. El proyecto contiene código fuente de otros autores, por lo que no me atribuyo la autoria del mismo. Sin embargo, se adaptaron la buenas practicas utlizadas para poder hacer uso de diversos elementos que sirvieron de aprendizaje para poder implementar en la construcción. 
***
## La estructrura del proyecto es la siguiente :
  - **Compiler:** Guarda el cache generado de la construccion de plantillas
  - **Config:** Almacena el archivo de configuracón de la base de datos
  - **Core:** Es el motor de la aplicacón donde se tienen diferentes directorios
      *  _Controller:_ Es la carpeta donde se almacenan los controladores de la aplicación
      *  _Lib:_ Contiene librerias como el sistema de rutas o la generación de las vistas
      *  _help:_ Contiene diversos metodos de utilidad, como validación de campos.
      *  _Model:_ Contiene los modelo de datos de la aplicación
      *  _ORM:_ Contiene el motor de conexión con la base de datos. 
      *  _sql_ Almacena los scripts de la base de datos, asi como ejemplos de uso del código.
  - **Syles:** 
      *  _Css:_ Guarda la cascada de estilos de la aplicación
      *  _Fonts:_ Fuentes utilizadas 
      *  _img:_ Imagenees del sitio
      *  _js:_ Archivos JS
      *  _templates:_ Plantillas utilizadas para la viata

Esta estructura puede variar, dependiendo del estandar implementado por frameworks como Laravel o symfony.
***

## Librerias
Al utilizar elementos más avanzados, conforme pasa el tiempo, el desarrollo se vuelve mas tedioso, por lo que en estos casos,
se utiliza un gestor de dependencias, lo cual me permite gestionar una gran cantidad de librerias, sin la necesidad de preocuparse por romper dependencias.
 
**Las librerias que se utilizaron fueron:**
 - Smarty (Gestor de plantillas)
 - Kint ( Depurador para ver arreglos)
 - GUMP ( Validacion de formularios en php)
 - composer (Gestor de dependencias)
 
### Composer
Composer ofrece la posiblidad de gestionar la carga de clases, mediante los namespaces de php, lo cual evita realizar demasados 
includes en el archivo de configuracion. Composer se encarga de incluir todas las dependencias utilizadas para los archivos, por  lo que unicamente, se incluye un archivo de configuracion "autoload".
Al instalar composer, se incluye un archivo Json para indicar que elementos se deben añadir para su posterior carga. 
Para más información: [Ir a composer](https://getcomposer.org/).

### Smarty
Smarty es un motor de plantillas para PHP. Mas especificamente, esta herramienta facilita la manera de separar la aplicación lógica y el contenido en la presentación. La mejor descripción esta en una situación donde la aplicación del programador y la plantilla del diseñador juegan diferentes roles, o en la mayoria de los casos no la misma persona. Para más informacion acerca de este motor de plantillas: [Documentación Smarty](http://www.smarty.net/docsv2/es/what.is.smarty.tpl).

### Kint
Es una herramienta moderna y poderosa para debugear en php. Esta libreria es muy util para poder analizar la estructura de los array de una manera mas clara. [Repositorio en git](https://github.com/kint-php/kint.git).

### GUMP
Es una libreria que facilita el trabajo de validación de los formularios. ademas de tener diversos tipos de validaciones, tambien el usuario puede agregar sus propios tipos de validaciones. [Repositorio en git](https://github.com/Wixel/GUMP.git).

***
## FrontEnd
### Boostrap
Boostrap es un framework frontend, el cual ofrece diversas herramientas para la maquetacion de la página web, ademas de que ofrece un diseño responsive
### Jquery
Esta libreria auque actualmente no es de las mas solicitadas, tiene muchos complementos que permiten una página web mucho mas intetactiva con el usuario. Alguna de las librerias utiizadas en este proyecto en particular fueron 
- [overhang](https://paulkr.github.io/overhang.js/)
- [jquery-Confirm](https://craftpip.github.io/jquery-confirm/)
- [Data Tables](https://datatables.net/)
Actualmente hay otras soluciones como Angular JS, ReactJS,vue.js, pero posiblemente se agregen más adelante 

***

## Arquitectura
En este apartado, se describe el funcionamiento de los diferentes módulos integrados hasta el momento.
   
### MVC.
 Este tipo de arquitecura, nos permite separa la logica de negocio, de la vista del cliente. De esta manera el mantenimieto a largo plazo es mucho mas sencillo, que trabjar sin ningún tipo de esquema. En el caso de esta aplicación se dividen en tres grandes ramas. A continuacion se explica la categoria, junto con la analogia con este diseño aqrquitectonico.  
* _Modelo_ 
  - 'Models': Es una abstración de todos los elementos de la base de datos, mediante el uso de getters y setters mágicos en php
* _Vista_
  - 'Vista': En esta version del proyecto, se utilza un gestor de plantillas. En este caso Smarty cumple con esa función, pero  independientemente del motor de plantillas, estas se encuentran encapsuladas mediante una clase llamada vistas, la cual se encarga de realizar las configuraciones necesarias para mostrarlas al usuario. Por la forma de estar programado, tiene limitaciones en cuanto al numero de variables que se le pueden asignar a la vista, pero se
* _Controlador:_
  -Controllers Se encargan de manejar las interacciones entre el sistema y el usuario. En esta clase se definen los metodos que se encargaran de mostrar las vistas.

### SOLID
Principios del diseño orientado a objetos proporcionan estabilidad y flexibildad a las aplicaciones web utilizando php. SOLID es un acronimo de los cinco principios de diseño orientado a objetos creados por Uncle Bob. Los cinco principios son:

* _S_. Single responsiblity principle
* _O_. Open /Close principle
* _L_. Liskov substitutuion principle
* _I_. Interface segregation principle
* _D_. Dependency inversion principle

Estos principios combinados facilitan al desarrollador crear proyectos fáciles de mantener y expandir
- Principio de responsablidad unica: 'Una clase solo debe tener un motivo para cambiar, lo que significa que solo debe tener una tarea'
- Principio abierto/cerrado: 'Los objetos o entidades deben estar abiertas a extension, pero cerradas para su modificación'
- Principio de substiucion de Liskov: 'Cualquier subclase deberia poder ser substituida por la clase padre'
- principio de segregación de interfaces ' una clase nunca debe ser forzada a implementar una interfaz que no utilza.'
- Principio de inversion de dependencias ' Las entidades deben depender de abstraciones, no de concreciones' 
***

### ACTIVE RECORD
En Ingeniería de software, active record es un patrón de arquitectura encontrado en aplicaciones que almacenan sus datos en Bases de datos relacionales. Fue llamado así por Martin Fowler en su libro Patterns of Enterprise Application Architecture. 

La interfaz de un cierto objeto debe incluir funciones como por ejemplo insertar (INSERT),actualizar (UPDATE), eliminar (DELETE) y propiedades que correspondan de cierta manera directamente a las columnas de la base de datos asociada.

Active record es un enfoque para acceso de datos en una base de datos. Una tabla de la base de datos o vista (view) está envuelta en una clase. Por lo tanto, una instancia de un objeto está ligada a un único registro (tupla) en la tabla. Después de crear y grabar un objeto, un nuevo registro es adicionado a la tabla. Cualquier objeto cargado obtiene su información a partir de la base de datos. 

Cuando un objeto es actualizado, un registro correspondiente en la tabla también es actualizado. Una clase de envoltura implementa los métodos de acceso (setter e getter) o propiedades para cada columna en la tabla o vista.

Este patrón suele ser utilizado por herramientas de persistencia de objetos en el mapeo objeto-relacional. Generalmente las relaciones de llave foránea serán expuestas como una instancia de objeto de tipo apropiado por medio de una propiedad.
***


 ## SISTEMA ORM
  Es un sistema que se encarga de gestionar las actividades de la base de datos, proporcionando una capa de abstracción que permite al usurio, no hacer uso de sentencias SQL de manera nativa. De esta manera se brinda una mayor seguridad, evitando que exista inyección de sentencias SQL.
  
  Este Sistema esta conformado por 3 modulos que se encargan de realizar todo el trabajo 
  
  * **Database:** Gestiona la conexión con el gestor de base de datos.
  * **Model:** Realiza la abstracción del mapeo de las tablas 
  * **Paginator:** Optimiza las consultas para reducir la gran cantidad de información recibida.

### Database
Este módulo es encargado unicamente de realizar la conexion con la base de datos. Este módulo se divide en varias secciones, las cuales son indispensables para su buen funcionamiento  

1. Drivers
2. Excepciones 
3. Interfaces

#### Drivers
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