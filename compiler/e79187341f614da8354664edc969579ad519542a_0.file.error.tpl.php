<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-04 20:42:40
  from "/var/www/html/blog/styles/templates/error/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_595c4410058230_17907620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e79187341f614da8354664edc969579ad519542a' => 
    array (
      0 => '/var/www/html/blog/styles/templates/error/error.tpl',
      1 => 1499218955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595c4410058230_17907620 (Smarty_Internal_Template $_smarty_tpl) {
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
    </head>
	<body>
	    <div class="container">
	          <div class="panel-body">
	            <title>Version: <?php echo Smarty::SMARTY_VERSION;?>
</title>
	          </div>
	          <div class="panel-footer">
	          		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	          		<hr>
	          		<p><h2>Desarrollado by Headcruser</h2></p>
	          </div>
	    </div>
	</body>
</html><?php }
}
