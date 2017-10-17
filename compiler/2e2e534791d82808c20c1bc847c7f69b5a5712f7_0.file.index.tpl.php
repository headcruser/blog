<?php
/* Smarty version 3.1.32-dev-11, created on 2017-10-17 13:41:24
  from "/var/www/html/blog/styles/templates/home/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59e64ed427eca1_47309055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e2e534791d82808c20c1bc847c7f69b5a5712f7' => 
    array (
      0 => '/var/www/html/blog/styles/templates/home/index.tpl',
      1 => 1508265681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e64ed427eca1_47309055 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/blog/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/blog/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200215792859e64ed425f681_13953402', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28570692859e64ed426cb50_08666212', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "home/GenericTemplate.tpl");
}
/* {block 'title'} */
class Block_200215792859e64ed425f681_13953402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_200215792859e64ed425f681_13953402',
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
class Block_28570692859e64ed426cb50_08666212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_28570692859e64ed426cb50_08666212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<header>
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
                            <button class="form-control btn-primary"> Buscar</button>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>  <?php echo $_smarty_tpl->tpl_vars['elemento']->value['titulo'];?>

                            </div>
                            <div class="panel-body">
                                <p>
                                    <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['elemento']->value['fecha']);?>
</strong>
                                </p>
                                <article class="text-justify">
                                    <?php echo smarty_modifier_truncate(nl2br($_smarty_tpl->tpl_vars['elemento']->value['texto']),250,"...",true);?>

                                </article>
                                    
                            </div>
                    </div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
