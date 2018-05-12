<p align="center"><img src="./doc/sources/about/BlogHeadcruser.JPG">
</p>


## Estructrura del proyecto
  - **Compiler:** Se almacena la cache del sistema
  - **Config:** Almacena archivos de configuracion
  - **db:** Almacema un historial de cambios de la base de datos con phinx
  - **doc:** Contiene informacion detallada de cada aspecto del sitio web
	- **Public:**
      *  _Css:_ Guarda la cascada de estilos de la aplicación
      *  _Fonts:_ Fuentes utilizadas
      *  _img:_ Imagenees del sitio
      *  _js:_ Archivos JS
  - **src:** Contiene codigo fuente de la página.
      *  _Controller:_ Es la carpeta donde se almacenan los controladores de la aplicación
      *  _Lib:_ Contiene librerias para el funcionamiento del sitio
      *  _Model:_ Contiene las entidades del sistema
      *  _sql_ Almacena de manera provicional el sript para hacer uso de la base de datos.
  - **templates:** Almacena las plantillas smarty
  - **test:** Contiene código de pruebas unitarias

## Archivos de configuración
    _config.yml:   'pagina personalizada para github'
    composer.json: 'Contiene las dependencias del proyecto'
    phinx.php:     'Configuracion para las migraciones
    phpcs.xml:     'Reglas para aplicar el standar psr2 php'
    phpunit.xml    'Reglas para las pruebas unitarias'
		editorconfig  'Contiene reglas para identar los archivos'
***

## Capturas del sitio
**Index**
<p align="center"><img src="./doc/sources/Maquetacion/inicio.png">
</p>

**Registro usuarios**
<p align="center"><img src="./doc/sources/Maquetacion/registro.png">
</p>

**Login del sitio**
<p align="center"><img src="./doc/sources/Maquetacion/DisignLogin.png">
</p>

## INSTALACION
Para descargar una copia del proyecto, se necesita descargarlo desde su repositorio en github, el cual se encuentra en el siguiente
[link](https://github.com/headcruser/blog).

Si se prefiere, se puede ejecutar el siguiente comando desde una terminal disponible
```
git clone https://github.com/headcruser/blog.git
```

Antes de trabajar con el proyecto, se necesita Composer, para mayor información, puedes acceder a la página oficial de [composer](https://getcomposer.org/).

El archivo **composer.json** se requiere para instalar las librerias adicionales utilizadas para el funcionamiento del proyecto

para instalarlas, se procede a ejecutar el siguiente comando:

```
composer install
```

## Entorno de desarrollo
Posteriormente de haber instalado las librerias, para ejecutar el proyecto se requiere ejecutar una serie de herramientas que son indispensables para el proyecto.

### Migraciones
El trabajo de migraciones, se realiza mediante Phinx, mendiante el cual se puede generar una base de datos.
Para trabajar con phinix, primero hay que seguir los siguientes pasos

#### Crear la base de datos desde mysql
```
create database blog;
```
#### Revisar el achivo de configuracion phinx

Despues de haber creado la base de datos, hay que revisar el archivo de configuracion, para verificar que los datos son correctos

#### Ejecutar Phinx
```
#Windows
.\vendor\bin\phinx migrate -e development

#Linux
phinx migrate -e development
```
### Ejecutar Seeders
Dentro de phinx, existe otra herramienta para añadir datos de forma automatizada. Esto se logra mediante el uso de seeders.

Para ejecutar, basta con teclear

```
# Windows
.\vendor\bin\phinx seed:run -e development

# Linux
phinx seed:run -e development
```

### Ejecutar Servidor de desarrollo
De forma sencilla, php proporciona un comando para lanzar un servidor local de la siguiente manera

```
php -S localhost:8000 -d display_errors=1 -t public"
```
