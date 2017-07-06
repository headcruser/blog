# blog
Construcción de miniframework usando diversas tecnologias

Este proyecto se empezo como una simple pagina web, pero conforme paso el tiempo se fueron agregando diversas tecnologias desconocidas por mi.
Por lo que el proyecto comenzo a crecer. Este proyecto contiene código fuente de otros autores, por lo que no me corresponde mi autoria. 
Sin embargo se adaptaron diversos elementos que sirvieron de aprendizaje para poder implementar en la construcción. Más adelante citare los
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

# Librerias
Al utilizar elementos más avanzados, conforme pasa el tiempo, el desarrollo se vuelve mas tedioso, por lo que en estos casos,
se utiliza un gestor de dependencias, lo cual me permite gestionar una gran cantidad de librerias, sin la necesidad de preocuparse por romper dependencias.
 
 Las librerias que se utilizaron fueron:
 
    -  Smarty (Gestor de plantillas)
    -  Kinki ( Depurador para ver arreglos)
    -  composer (Gestor de dependencias)
 
 # Sobre el uso de composer
 Composer ofrece la posiblidad de gestionar la carga de clases, mediante los namespaces de php, lo cual evita realizar demasados 
 includes en el archivo de configuracion.
 La estrucura de los namespace esta dada por el directorio en que se encuentra, por ejemplo, para la carga de los modelos se 
 define como 
    - namespace core/models;
  
  Para usarlos en una clase cualquiera, basta con usar 
   - use core/models/<nombreClase
 
Para más informacion, consulta el sitio web de composer https://getcomposer.org/.

    
