<form class="form" role="form" method="post" action="http://{$smarty.server.SERVER_NAME}/blog/auth/login" accept-charset="UTF-8" id="login">
    <div class="form-group">
        <label class="sr-only" for="exampleInputEmail2">Correo Electrónico</label>
        <input type="email" class="form-control"
        id="email" 
        name="email" 
        placeholder="Email address">
    </div>
    <div class="form-group">
        <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
        <input type="password" class="form-control" 
                id="pasword" 
                name="pasword" 
                placeholder="Password" >
        <div class="help-block text-center">
            <a  href="">Olvidaste tu contraseña ?</a>
        </div>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" id="btn_login" >Sign in</button>
    </div>
</form>