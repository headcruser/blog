<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-09 13:17:35
  from "/var/www/html/blog/styles/templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_5962733f5abd42_43932770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c98090654c11439bdc855d90a4c37780d4fce0' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/index.tpl',
      1 => 1499624248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/declaracion.inc.tpl' => 1,
    'file:overall/navbar.inc.tpl' => 1,
    'file:overall/footer.inc.tpl' => 1,
    'file:overall/cierre.inc.tpl' => 1,
  ),
),false)) {
function content_5962733f5abd42_43932770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:overall/declaracion.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:overall/navbar.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="width=90%">
    <h1 class="container well">Administrador Blog headcruser <small>Derechos Reservados</small></h1>
    <div class="default col-md-3">
        <div class="list-group">
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin" class="list-group-item active">Administrar</a>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/usuario" class="list-group-item">Usuario</a>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/entradas" class="list-group-item">Entradas</a>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/comentarios" class="list-group-item">Comentario</a>
        </div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="panel panel-primary">
            <div class="panel panel-heading"> <center><b>Pagina Principal</b></center></div>
            <div class="panel-body" width="95%">
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
