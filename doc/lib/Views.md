# Views (Vistas)
El blog cuenta con una clase que renderiza las vistas utilizando como motor, el gestor de plantillas smarty. Para poder hacer uso de este sistema se tiene que usar de la siguiente manera


Primero se debe Importar la clase

    use core\lib\View\RenderView;

Despues, para crear una instancia, se crea de la siguiente forma, en este caso, el constructor no necesita parametros

    $view=new RenderView();

La clase cuenta con los siguientes metodos

## Método Render

Renderiza las vistas del usuario, este metodo tiene los siguientes argumentos
* string $path Indica el nombre de la ruta del template
* array|string|null $key Especifica un nombre para la variable
* array|string|null $value Valor de la variable del objeto

Para utilizar el metodo render se tienen dos formas, la primera es donde solo se especifica el nombre de la ruta de la vista:

    $view->render("home.index");
    home: Nombre del directorio
    index: Indica el nombre de la vista

Las vistas se almacenan el la siguiente ruta del proyecto
    
    styles/templates

Si alguna vista no se encuentra dentro de ningun directorio, simplemente se especifica el nombre de la plantilla, sin el tipo de extensión. 


Si no se encuentra la vista, lanza una excepcion, Advirtuendo al usuario de que no se encuentra la ruta.
    
    $view->render("index");

***

## Assing
Este metodo, recibe 2 parametros

 sirve para asignar una variable en el gestor de plantillas, Un ejemplo de como podria utilizarse es el siguiente :
    
    $view->assign("titulo","Bienvenido a la pagina principal");
    1er artgumento: Es el nombre de la variable
    
