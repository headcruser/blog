<?php
/* Smarty version 3.1.32-dev-11, created on 2017-10-14 22:23:07
  from "/var/www/html/blog/styles/templates/home/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59e2d49b2cc1d6_60632169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b315644968a53ae4063e6c2b3840ef8bfded01d0' => 
    array (
      0 => '/var/www/html/blog/styles/templates/home/login.tpl',
      1 => 1508037781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e2d49b2cc1d6_60632169 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="form" role="form" method="post" action="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/auth/login" accept-charset="UTF-8" id="login">
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
</form><?php }
}
