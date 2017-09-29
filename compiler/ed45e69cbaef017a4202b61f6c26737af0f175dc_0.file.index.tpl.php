<?php
/* Smarty version 3.1.32-dev-11, created on 2017-09-29 14:47:40
  from "/var/www/html/blog/styles/templates/admin/usuario/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59cea35cd392a5_75758423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed45e69cbaef017a4202b61f6c26737af0f175dc' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/usuario/index.tpl',
      1 => 1506460337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/usuario/crearUsuario.tpl' => 1,
    'file:admin/usuario/listarUsuarios.tpl' => 1,
  ),
),false)) {
function content_59cea35cd392a5_75758423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29876400159cea35cd06e71_48762856', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25247536559cea35cd08971_49499095', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "home/GenericTemplate.tpl");
}
/* {block 'title'} */
class Block_29876400159cea35cd06e71_48762856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_29876400159cea35cd06e71_48762856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Revisar Usuarios <?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_25247536559cea35cd08971_49499095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_25247536559cea35cd08971_49499095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container panel panel-primary" style="width=90%">
    <h1 class="panel panel-heading text-center">Administrador de usuarios</h1>
    <div class="default col-md-3 " >
        <div class="list-group panel panel-primary">
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/usuario" class="list-group-item active"> <span class="glyphicon glyphicon-list"></span> Menú </a>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/usuario/listar" class="list-group-item"><span class="glyphicon glyphicon-wrench"></span> Administrar Usuario</a>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/usuario/crear" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Crear usuario</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-file"></span> Reporte Usuario</a>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin" class="list-group-item">
                    <span class="glyphicon glyphicon-menu-left"></span>Regresar a menu Principal</a>
        </div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="panel panel-primary">
            <div class="panel panel-heading"> 
                <center><b><?php if (isset($_smarty_tpl->tpl_vars['variables']->value['panelTitulo'])) {
echo $_smarty_tpl->tpl_vars['variables']->value['panelTitulo'];
} else { ?>Panel<?php }?></b></center>
            </div>
            <div class="panel-body" width="95%">
            <?php if (isset($_smarty_tpl->tpl_vars['variables']->value['alerta'])) {?>
                 <div class="alert alert-danger">
                    	<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/usuario/crear" 
                        type="button" class="close" data-dismiss="alert">&times;</a>
                    	<strong>Error! </strong> <?php echo $_smarty_tpl->tpl_vars['variables']->value['alerta'];?>

                </div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['variables']->value['accion'])) {?>
                <?php if ($_smarty_tpl->tpl_vars['variables']->value['accion'] == 1) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:admin/usuario/crearUsuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['variables']->value['accion'] == 2) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:admin/usuario/listarUsuarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
                    
                <?php }?>
    
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
