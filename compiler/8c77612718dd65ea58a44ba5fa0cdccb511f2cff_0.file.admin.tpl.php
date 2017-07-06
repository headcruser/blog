<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-05 19:14:12
  from "/var/www/html/blog/styles/templates/admin/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_595d80d4825646_66377134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c77612718dd65ea58a44ba5fa0cdccb511f2cff' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/admin.tpl',
      1 => 1499299985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/declaracion.inc.tpl' => 1,
    'file:overall/navbar.inc.tpl' => 1,
    'file:admin/crearUsuario.tpl' => 1,
    'file:overall/footer.inc.tpl' => 1,
    'file:overall/cierre.inc.tpl' => 1,
  ),
),false)) {
function content_595d80d4825646_66377134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:overall/declaracion.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:overall/navbar.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="width=90%">
    <h1 class="container well">Administrador Blog headcruser <small>Derechos Reservados</small></h1>
    <div class="default col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active">Menú Usuarios</a>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin/altaUsuario" class="list-group-item">Agregar Usuarios</a>
            <a href="#" class="list-group-item">Administrar Usuarios</a>
            <a href="#" class="list-group-item">Reporte Usuario</a>
        </div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="panel panel-primary">
            <div class="panel panel-heading"> <center><b>Agregar Usuario</b></center></div>
            <div class="panel-body" width="95%">
                <?php if (isset($_smarty_tpl->tpl_vars['variables']->value['mensaje'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['variables']->value['mensaje'];?>

                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['variables']->value['accion'])) {?>
                    <?php if ($_smarty_tpl->tpl_vars['variables']->value['accion'] == 1) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:admin/crearUsuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php } else { ?>
                        Bienvenido al index principal
                    <?php }?>
                    <?php } else { ?>
                        Bienvenido al index principal
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
