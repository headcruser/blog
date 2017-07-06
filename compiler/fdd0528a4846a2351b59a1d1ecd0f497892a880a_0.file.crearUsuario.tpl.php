<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-05 18:56:45
  from "/var/www/html/blog/styles/templates/admin/crearUsuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_595d7cbd63d8d2_06341497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdd0528a4846a2351b59a1d1ecd0f497892a880a' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/crearUsuario.tpl',
      1 => 1499298994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595d7cbd63d8d2_06341497 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form name="agrega_usuario" method="post" action="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin/altaUsuario" accept-charset="UTF-8" >
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
        <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin" class="btn btn-danger"> Cancelar Registro</a>
    </center>
</form><?php }
}
