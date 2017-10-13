<?php
/* Smarty version 3.1.32-dev-11, created on 2017-10-13 14:04:42
  from "/var/www/html/blog/styles/templates/error/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59e10e4a128572_40836049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e79187341f614da8354664edc969579ad519542a' => 
    array (
      0 => '/var/www/html/blog/styles/templates/error/error.tpl',
      1 => 1507921478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/footer.inc.tpl' => 1,
  ),
),false)) {
function content_59e10e4a128572_40836049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo @constant('CSS');?>
bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo @constant('CSS');?>
font-awesome.min.css">        
	<link rel="stylesheet" href="<?php echo @constant('CSS');?>
normalize.css">
	<link rel="stylesheet" href="<?php echo @constant('CSS');?>
estilos.css"/>
	<title>Version: <?php echo Smarty::SMARTY_VERSION;?>
</title>
</head>
	<body>
	
		<div class="container">
			<div class="panel-footer border border-primary">
				<div class="jumbotron">
					<h1 class="text-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6878612459e10e4a10e1c0_55209777', 'tituloError');
?>
</h1>
				</div>
				
				<p class="text-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24248945359e10e4a10f9b8_40969207', 'message');
?>
</p>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="container-fluid">
							<a class="container-fluid btn btn-default btn-primary"
								href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/home">
								<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Regresar
							</a>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>

		<footer> 
			<?php $_smarty_tpl->_subTemplateRender('file:overall/footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</footer>
	</body>
</html><?php }
/* {block 'tituloError'} */
class Block_6878612459e10e4a10e1c0_55209777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tituloError' => 
  array (
    0 => 'Block_6878612459e10e4a10e1c0_55209777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
TipoError<?php
}
}
/* {/block 'tituloError'} */
/* {block 'message'} */
class Block_24248945359e10e4a10f9b8_40969207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'message' => 
  array (
    0 => 'Block_24248945359e10e4a10f9b8_40969207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mensaje Adicional<?php
}
}
/* {/block 'message'} */
}
