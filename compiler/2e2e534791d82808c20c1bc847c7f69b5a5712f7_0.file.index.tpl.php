<?php
/* Smarty version 3.1.32-dev-11, created on 2017-09-26 15:07:09
  from "/var/www/html/blog/styles/templates/home/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59cab36dd98665_14362642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e2e534791d82808c20c1bc847c7f69b5a5712f7' => 
    array (
      0 => '/var/www/html/blog/styles/templates/home/index.tpl',
      1 => 1506456424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cab36dd98665_14362642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19210906559cab36dd6e171_73513207', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45055075959cab36dd70971_71807878', 'estilos');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209906127259cab36dd8b4d1_87880108', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169751471159cab36dd958d9_51020793', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "home/GenericTemplate.tpl");
}
/* {block 'title'} */
class Block_19210906559cab36dd6e171_73513207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19210906559cab36dd6e171_73513207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php
}
}
/* {/block 'title'} */
/* {block 'estilos'} */
class Block_45055075959cab36dd70971_71807878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_45055075959cab36dd70971_71807878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
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
<?php
}
}
/* {/block 'estilos'} */
/* {block 'js'} */
class Block_209906127259cab36dd8b4d1_87880108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_209906127259cab36dd8b4d1_87880108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
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
<?php
}
}
/* {/block 'js'} */
/* {block 'body'} */
class Block_169751471159cab36dd958d9_51020793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_169751471159cab36dd958d9_51020793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header>
<!-- Contenedor header -->
    <div class="contenedor">
        <div class="contenedor-texto">
            <div class="texto">
                <h1 class="nombre">Daniel Martinez</h1>
                <h2 class="profesion">Blog headcruser</h2>
            </div>
        </div>
    </div>      
</header>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="div-col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="Busqueda">
                            </div>
                            <button class="form-control"> Buscar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="div-col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Búsqueda
                        </div>
                        <div class="panel-body"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="div-col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
                        </div>
                        <div class="panel-body"></div>
                    </div>
                </div>
            </div>
            
        </div>


        <div class="col-md-8">
             <div class="panel panel-default">
                <div class="panel-heading">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>  Últimas Entradas
                </div>
                <div class="panel-body">
                   <p>sin entradas</p>
                    <?php echo $_SERVER['SERVER_NAME'];?>

                    <?php echo @constant('RUTA_BASE');?>

                </div>
            </div>
        </div>
        
    </div>
</div>

<?php
}
}
/* {/block 'body'} */
}
