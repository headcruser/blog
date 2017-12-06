# Route
La librerioa Route se encarga de enrutar hacia los diferentes enlaces que existen de la aplicación. 

Dentro del constructor de la clase se pueden definir diversas rutas que son las que se trabajan dentro del sistema, teniendo la siguiente estructura:
    
    "/"=>"indexController",
    "/home"=>"indexController",
    "/auth"=>"AuthController",
    "/registro"=>"registroController",
    "/admin" =>"adminController",
    "/usuario" =>"usuarioController",
    "/entrada" =>"EntradaController"

Estas Rutas estan definidas dentro de un array, donde posteriormente seran leidas, dependiendo de la accion que el usuario ejecute. Esta ruta esta dividida en dos partes, 

* Ruta del navegador: Especifica el nombre que se debe teclear en el navegador
* Nombre de la clase controladora : Es el nombre asignado a la clase controladora.

Cuando se realiza una instancia de la clase, se debe utilizar el metodo submit, para dirigirse a una pagina en especifico.