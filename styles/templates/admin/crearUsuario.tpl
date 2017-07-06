{*Formulario para crear un usuario en administrador*}
<form name="agrega_usuario" method="post" action="http://{$smarty.server.SERVER_NAME}/blog/admin/altaUsuario" accept-charset="UTF-8" >
    <div class="form-group" >
        <div class="input-group" >
            <span class="input-group-addon">Nombre completo</span>
            <input class="form-control" type="text" id='nombre' name="nombre">
        </div>
    </div>
    <div class="form-group" >
        <div class="input-group">
            <span class="input-group-addon">Email</span>
            <input class="form-control" type="email" id='email' name="email">
        </div>
    </div>
    <div class="form-group" >
        <div class="input-group">
            <span class="input-group-addon">Contraseña</span>
            <input class="form-control" type="password" id='pasword' 
                name="pasword">
        </div>
    </div>
    <div class="form-group" >
        <div class="input-group">
            <span class="input-group-addon">Reingresa la Contraseña</span>
            <input class="form-control" type="password" id='pasword2'
            name="pasword2">
        </div>
    </div>
    <center>
        <input type="submit" name="btn_save" value="Guardar Usuario" class="btn btn-primary">
        <a href="http://{$smarty.server.SERVER_NAME}/blog/admin" class="btn btn-danger"> Cancelar Registro</a>
    </center>
</form>