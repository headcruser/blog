Descipción del proyecto.

Este proyecto se empezo como una simple pagina web, pero conforme paso el tiempo se fueron agregando diversas tecnologias desconocidas por mi. El proyecto contiene código fuente de otros autores, por lo que no me atribuyo la autoria del mismo. 
Sin embargo, se adaptaron la buenas practicas utlizadas para poder hacer uso de diversos elementos que sirvieron de aprendizaje para poder implementar en la construcción. Más adelante citare los
codigos fuentes utilizados en la construcción de este proyecto.

La estructrura del proyecto es la siguiente :
  - Compiler: Guarda el cache generado de la construccion de plantillas
  - Config: Almacena el archivo de configuracón de la base de datos 
  - Core: Es el motor de la aplicacón donde se tienen diferentes directorios
      *  Controller: Es la carpeta donde se almacenan los controladores de la aplicación
      *  Lib: Contiene librerias como el sistema de rutas o la generación de las vistas
      *  help: Contiene diversos metodos de utilidad, como validación de campos.
      *  Model: Contiene los modelo de datos de la aplicación
      *  ORM: Contiene el motor de conexión con la base de datos. 
      *  sql Almacena los scripts de la base de datos, asi como ejemplos de uso del código.
  - Syles: 
      *  Css: Guarda la cascada de estilos de la aplicación
      *  Fonts: Fuentes utilizadas 
      *  img: Imagenees del sitio
      *  js: Archivos JS
      *  templates: Plantillas utilizadas para la viata

Esta estructura puede variar, dependiendo del estandar implementado por frameworks como Laravel o symfony.

Librerias
Al utilizar elementos más avanzados, conforme pasa el tiempo, el desarrollo se vuelve mas tedioso, por lo que en estos casos,
se utiliza un gestor de dependencias, lo cual me permite gestionar una gran cantidad de librerias, sin la necesidad de preocuparse por romper dependencias.
 
 Las librerias que se utilizaron fueron:
 
    -  Smarty (Gestor de plantillas)
    -  Kinki ( Depurador para ver arreglos)
    -  composer (Gestor de dependencias)
 
Composer
Composer ofrece la posiblidad de gestionar la carga de clases, mediante los namespaces de php, lo cual evita realizar demasados 
includes en el archivo de configuracion. Composer se encarga de incluir todas las dependencias utilizadas para los archivos, por  lo que unicamente, se incluye un archivo de configuracion "autoload".
Al instalar composer, se incluye un archivo Json para indicar que elementos se deben añadir para su posterior carga. 
Para más informacion, consulta el sitio web de composer https://getcomposer.org/.

Namespaces
 La estrucura de los namespace esta dada por el directorio en que se encuentra, por ejemplo, para la carga de los modelos se 
 define como 
    - namespace core/models;
  
  Para usarlos en una clase cualquiera, basta con usar 
   - use core/models/<nombreClase.
   
#MOTOR DE LA APLICACION. 
En este apartado, se describe el funcionamiento de los diferentes módulos integrados hasta el momento.
   
MVC
Este tipo de arquitecura, nos permite separa la logica de negocio, de la vista del cliente. De esta manera el mantenimieto a largo plazo es mucho mas sencillo, que trabjar sin ningún tipo de esquema. En el caso de esta aplicación se dividen en tres grandes ramas. A continuacion se explica la categoria, junto con la analogia con este diseño aqrquitectonico.  
  * Modelo 
    - 'Models': Es una abstración de todos los elementos de la base de datos, mediante el uso de getters y setters mágicos en php
  * Vista 
    - 'Vista': En esta version del proyecto, se utilza un gestor de plantillas. En este caso Smarty cumple con esa función, pero  independientemente del motor de plantillas, estas se encuentran encapsuladas mediante una clase llamada vistas, la cual se encarga de realizar las configuraciones necesarias para mostrarlas al usuario. Por la forma de estar programado, tiene limitaciones en cuanto al numero de variables que se le pueden asignar a la vista, pero se
  * Controlador:
    -Controllers Se encargan de manejar las interacciones entre el sistema y el usuario. En esta clase se definen los metodos que se encargaran de mostrar las vistas. 
 
 SISTEMA ORM
  


    
