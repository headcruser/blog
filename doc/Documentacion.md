# ESQUEMA DE DISEÑO DE BLOG
Este documento, contiene los objetivos, y metodologia de trabajo de la página en construcción.

## OBJETIVO GENERAL
Diseñar una página web con tematica de blog, con la finalidad de integrar distintas herramientas de desarrollo, tanto en el frot-end, como en el backend. 

### OBJETIVOS ESPECIFICOS
* Refactoriozación de código, para optmizar el mantenimiento del sitio.
* Patrones de diseño para tener un estandar general para la construción de codigo.
* Maquetación Con **photoshop** con la finalidad de tener una idea clara acerca de la construción del sitio. 

***

# DISEÑO DEL MODELO DE DATOS

### Modelo E-R
<p align="center"><img src="./sources/BD/DIAGRAMA_ER.png">
</p>

### Modelo Relacional

<p align="center"><img src="./sources/BD/DIAGRAMA_RELACIONAL.png">
</p>


El Esquema de base de datos, representa la estructura de datos, en donde se almacenan los siguientes elmementos

- *Entradas:*  Representa los articulos publicados en el sitio
- *Comentarios:* Almacenan los comentatrios de los que leen los blogs 
- *Usuarios:* Representan los usuarios registrados del sistema
- *Roles:* Representan la función que desempeñan dentro del sistema 
- *Privilegios:* Representan los permisos de los usuarios.

***

## Librerias
Las librerias permiten facilitar trabajo en algunos aspectos.Existen diversas Librerias que ayudan a facilitar la construcción de sitios web

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

* **Modelo** : Es una abstración de todos los elementos de la base de datos, mediante el uso de getters y setters mágicos en php.

* **Vista** : En esta version del proyecto, se utilza un gestor de plantillas. En este caso Smarty cumple con esa función, pero  independientemente del motor de plantillas, estas se encuentran encapsuladas mediante una clase llamada vistas, la cual se encarga de realizar las configuraciones necesarias para mostrarlas al usuario. 

* **Controlador :**  Controllers Se encargan de manejar las interacciones entre el sistema y el usuario. En esta clase se definen los metodos que se encargaran de mostrar las vistas.

 ### Estructura del sitio web
- *Inicio ( home )*
  - Autores
    - Busquedas Personalizadas
  - Entradas 
    - Busquedas Personalizadas
  - Blog
    - Cometarios de un blog 
    - Cualquiera puede comentar
- *Registro (Usuario)*
  - Formulario de Registro 
  - Recuperación de cuenta
- *Login*
  - Autenticación de usuarios
- *Administrador*
  - CRUD Tablas del sistema 
  - Perfil 
  - Reportes PDF (Opcional en registro de auditorias)
  - Opción Eliminar Datos
- Usuario (Básico Autentificado)
  - Editar Blogs Propios
  - Crear Blogs
  - Publicar Blogs
  - Modificar Perfil
    - Foto
    - Datos Personales
- *Modificaciones a futuro*
  - Autentificación por facebook
  - Adjuntar Archvivos mediante dropbox