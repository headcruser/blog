<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-11 22:58:15
  from "/var/www/html/blog/styles/templates/admin/usuario/crearUsuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59659e570c3d58_03070982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec659865100b2ca8d614d289a57ac102149279de' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/usuario/crearUsuario.tpl',
      1 => 1499831878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59659e570c3d58_03070982 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="registro" method="post" action="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin/altaUsuario" role="form" >
    <div class="form-group" >
        <div class="input-group" >
            <span class="input-group-addon">Nombre completo</span>
            <input class="form-control" type="text" id='nombre' name="nombre" 
            <?php if (isset($_smarty_tpl->tpl_vars['variables']->value['usuarios'])) {?> 
                value="<?php echo $_smarty_tpl->tpl_vars['variables']->value['usuarios']->nombre;?>
"
             <?php }?>>
        </div>
    </div>
    <div class="form-group" >
        <div class="input-group">
            <span class="input-group-addon">Email</span>
            <input class="form-control" type="email" id='email' name="email"
            <?php if (isset($_smarty_tpl->tpl_vars['variables']->value['usuarios'])) {?> 
                value="<?php echo $_smarty_tpl->tpl_vars['variables']->value['usuarios']->email;?>
"
             <?php }?>
            >
            
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
/blog/usuario/listar" class="btn btn-danger"> Cancelar Registro</a>
    </center>
</form><?php }
}
