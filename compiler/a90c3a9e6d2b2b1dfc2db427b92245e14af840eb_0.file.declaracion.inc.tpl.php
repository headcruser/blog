<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-14 19:38:03
  from "/var/www/html/blog/styles/templates/overall/declaracion.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_596963ebcece43_11863636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a90c3a9e6d2b2b1dfc2db427b92245e14af840eb' => 
    array (
      0 => '/var/www/html/blog/styles/templates/overall/declaracion.inc.tpl',
      1 => 1500079069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596963ebcece43_11863636 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Declaracion del documento html -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <?php if (isset($_smarty_tpl->tpl_vars['titulo']->value)) {?>
            <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        <?php } else { ?>
            <?php if (isset($_smarty_tpl->tpl_vars['variables']->value['titulo'])) {?>
                <title><?php echo $_smarty_tpl->tpl_vars['variables']->value['titulo'];?>
</title>
                <?php } else { ?>
                <?php if (isset($_SESSION['nombre'])) {?>
                    <title>Bienvenido <?php echo $_SESSION['nombre'];?>
</title>
                    <?php } else { ?>
                        <title>Titulo predeterminado</title>
                <?php }?>
            <?php }?>
        <?php }?>

        

        
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
font-awesome.min.css">        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" 
              rel="stylesheet"> 
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
normalize.css">
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
overhang.min.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
bootstrapValidator.min.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
login.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
estilos.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
jquery-confirm.min.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
dataTables.bootstrap.min.css"/>

        
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
/metisMenu/metisMenu.min.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
/metisMenu/sb-admin-2.css"/>
        
        
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
bootstrapValidator.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery-confirm.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
validarRegistro.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
overhang.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
inicioSesion.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
dataTables.bootstrap.js"><?php echo '</script'; ?>
>

        
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
metisMenu/metisMenu.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
metisMenu/sb-admin-2.js"><?php echo '</script'; ?>
>
    </head>
<body><?php }
}
