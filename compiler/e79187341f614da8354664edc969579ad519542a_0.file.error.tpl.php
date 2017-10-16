<?php
/* Smarty version 3.1.32-dev-11, created on 2017-10-16 16:38:58
  from "/var/www/html/blog/styles/templates/error/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59e526f2ee3317_21849099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e79187341f614da8354664edc969579ad519542a' => 
    array (
      0 => '/var/www/html/blog/styles/templates/error/error.tpl',
      1 => 1508189819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/footer.inc.tpl' => 1,
  ),
),false)) {
function content_59e526f2ee3317_21849099 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127909043359e526f2eccaa4_19823004', 'cuerpo');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143785859e526f2ee0ca7_10984650', 'footer');
?>

	</body>
</html><?php }
/* {block 'tituloError'} */
class Block_178162336359e526f2ecd654_51961147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
TipoError<?php
}
}
/* {/block 'tituloError'} */
/* {block 'message'} */
class Block_7507057459e526f2ece837_88205916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mensaje Adicional<?php
}
}
/* {/block 'message'} */
/* {block 'cuerpo'} */
class Block_127909043359e526f2eccaa4_19823004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cuerpo' => 
  array (
    0 => 'Block_127909043359e526f2eccaa4_19823004',
  ),
  'tituloError' => 
  array (
    0 => 'Block_178162336359e526f2ecd654_51961147',
  ),
  'message' => 
  array (
    0 => 'Block_7507057459e526f2ece837_88205916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="container">
			<div class="panel-footer border border-primary">
				<div class="jumbotron">
					<h1 class="text-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178162336359e526f2ecd654_51961147', 'tituloError', $this->tplIndex);
?>
</h1>
				</div>
				
				<p class="text-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7507057459e526f2ece837_88205916', 'message', $this->tplIndex);
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
	<?php
}
}
/* {/block 'cuerpo'} */
/* {block 'footer'} */
class Block_143785859e526f2ee0ca7_10984650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_143785859e526f2ee0ca7_10984650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<footer> 
			<?php $_smarty_tpl->_subTemplateRender('file:overall/footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</footer>
		<?php
}
}
/* {/block 'footer'} */
}
