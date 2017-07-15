{include file='overall/declaracion.inc.tpl'}
{include file='overall/navbar.inc.tpl'}

<div class="container">
 	<div class="jumbotron">
 		<h1 class="text-center">Formulario de Registro</h1>
 	</div>
 </div>

 <div class="container">
 	<div class="row">
 		<div class="col-md-6">
 			<div class=""></div>
 		</div>
 		<div class="col-md-6">
 			
 		</div>
 	</div>
 </div>


 <div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Instrucciones
                    </h3>
                </div>  
                <div class="panel-body">
                    <br>
                    <p class="text-justify">
                        Para unirte al blog de Headcruser, introduce un nombre
                        de usuario, tu email y una contraseña. El email que escribas
                        debe ser real ya que lo necesitarás para gestionar tu cuenta.
                        Te recomendamos que uses una contraseña que contenga letras
                        minúsculas, mayúsculas, números y símbolos.
                    </p>
                    <br>
                    <a href="#">¿Ya tienes cuenta?</a>
                    <br>
                    <br>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Introduce tus datos

                    </h3>
                </div>  
                <div class="panel-body">

                	<form id="usuarioNuevo" role="form" method="post" 
                     action="http://{$smarty.server.SERVER_NAME}/blog/registro/alta">
                		<div class="form-group" >
                			<label class="help-block">Nombre Usuario</label>
                			<input class="form-control" type="text" id='nombre' 
                                name="nombre">
                		</div>

                		<div class="form-group">
                			<label class="help-block">Email</label>
                			<input class="form-control" type="email" id='email' 
                                name="email">
                		</div>

                		<div class="form-group">
                			<label class="help-block">Contraseña</label>
                			<input class="form-control" type="password" id='pasword' 
                                name="pasword">
                		</div>

                		<div class="form-group">
                			<label class="help-block">Repite Contraseña</label>
                			<input class="form-control" type="password" id='pasword2'
                            name="pasword2">
                		</div>
                		<br>
                		<button type="submit" class="btn btn-default btn-primary"> Registrarse</button>
                		<button type="reset" class="btn btn-default btn-primary" 
                         id="send_request" name="enviar"> Limpiar Formulario</button>

                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="{$smarty.const.JS}usuarioNuevo.js"></script>
{include file='overall/footer.inc.tpl'}
{include file='overall/cierre.inc.tpl'}