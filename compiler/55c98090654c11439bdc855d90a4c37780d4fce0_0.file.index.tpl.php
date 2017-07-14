<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-13 20:15:59
  from "/var/www/html/blog/styles/templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59681b4fb64664_72394357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c98090654c11439bdc855d90a4c37780d4fce0' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/index.tpl',
      1 => 1499994956,
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
function content_59681b4fb64664_72394357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:overall/declaracion.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:overall/navbar.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container panel panel-primary" style="width=90%">
    <h1 class="panel panel-heading text-center">Administrador Blog headcruser</h1>
    <div class=" col-md-3 " >
        <div class="sidebar-nav navbar-collapse panel">
			<ul class="nav" id="side-menu">
				<li class="sidebar-search">
					<div class="input-group custom-search-form" >
						<input type="text" class="form-control" placeholder="Buscar Entradas...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
					<!-- /input-group -->
				</li>
				<li>
					<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin"><i class="fa fa-dashboard fa-fw"></i> Principal</a>
				</li>

				<li>
					<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/entradas"><i class="fa fa-table fa-fw"></i>Entradas</a>
				</li>
				<li>
					<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/comentarios"><i class="fa fa-edit fa-fw"></i> Comentarios</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-wrench fa-fw">
                        </i> Administracion<span class="fa arrow"></span>
                    </a>
					<ul class="nav nav-second-level">
						<li>
							<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/usuario">Usuarios</a>
						</li>
						<li>
							<a href="#">Privilegios</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
			</ul>
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
