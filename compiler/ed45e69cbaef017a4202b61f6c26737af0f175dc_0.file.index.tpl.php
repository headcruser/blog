<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-09 13:35:18
  from "/var/www/html/blog/styles/templates/admin/usuario/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59627766deaab4_68002545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed45e69cbaef017a4202b61f6c26737af0f175dc' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/usuario/index.tpl',
      1 => 1499625306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/declaracion.inc.tpl' => 1,
    'file:overall/navbar.inc.tpl' => 1,
    'file:admin/usuario/crearUsuario.tpl' => 1,
    'file:admin/usuario/listarUsuarios.tpl' => 1,
    'file:overall/footer.inc.tpl' => 1,
    'file:overall/cierre.inc.tpl' => 1,
  ),
),false)) {
function content_59627766deaab4_68002545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:overall/declaracion.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:overall/navbar.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="width=90%">
    <h1 class="container well text-center">Administrador de usuarios</h1>
    <div class="default col-md-3">
        <div class="list-group">
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/usuario" class="list-group-item active">Menú Usuarios</a>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/usuario/listar" class="list-group-item">Administrar Usuarios</a>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/usuario/crear" class="list-group-item">Agregar Usuarios</a>
            <a href="#" class="list-group-item">Reporte Usuario</a>
        </div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="panel panel-primary">
            <div class="panel panel-heading"> 
                <center><b><?php if (isset($_smarty_tpl->tpl_vars['variables']->value['titulo'])) {
echo $_smarty_tpl->tpl_vars['variables']->value['titulo'];
} else { ?>Panel Usuarios<?php }?></b></center>
            </div>
            <div class="panel-body" width="95%">
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
<?php $_smarty_tpl->_subTemplateRender('file:overall/footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- incluye el cierre de la declaracion -->
<?php $_smarty_tpl->_subTemplateRender('file:overall/cierre.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
