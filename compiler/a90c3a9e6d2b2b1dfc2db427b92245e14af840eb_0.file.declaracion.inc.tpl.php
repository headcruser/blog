<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-05 17:18:16
  from "/var/www/html/blog/styles/templates/overall/declaracion.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_595d65a80c8699_85605848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a90c3a9e6d2b2b1dfc2db427b92245e14af840eb' => 
    array (
      0 => '/var/www/html/blog/styles/templates/overall/declaracion.inc.tpl',
      1 => 1499293067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595d65a80c8699_85605848 (Smarty_Internal_Template $_smarty_tpl) {
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
             <?php if (isset($_SESSION['nombre'])) {?>
                <title>Bienvenido <?php echo $_SESSION['nombre'];?>
</title>
                <?php } else { ?>
                <title>Titulo principal</title>
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
dataTables.bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
login.css"/>
        <link rel="stylesheet" href="<?php echo @constant('CSS');?>
estilos.css"/>
        
    </head>
<body><?php }
}
