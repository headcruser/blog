<?php
/* Smarty version 3.1.32-dev-11, created on 2017-09-26 15:59:45
  from "/var/www/html/blog/styles/templates/registro/registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59cabfc1cb4b02_84903394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fde380170e9e9cf58b9bcf0ca9f603dd043a64d' => 
    array (
      0 => '/var/www/html/blog/styles/templates/registro/registro.tpl',
      1 => 1506459566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cabfc1cb4b02_84903394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77343934159cabfc1ca3f05_25307407', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200371432759cabfc1ca6de5_24500775', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "home/GenericTemplate.tpl");
}
/* {block 'title'} */
class Block_77343934159cabfc1ca3f05_25307407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_77343934159cabfc1ca3f05_25307407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_200371432759cabfc1ca6de5_24500775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_200371432759cabfc1ca6de5_24500775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
 		<div class="col-md-6"></div>
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
                     action="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/registro/alta">
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
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
usuarioNuevo.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
