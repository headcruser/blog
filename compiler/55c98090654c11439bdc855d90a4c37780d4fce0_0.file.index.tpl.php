<?php
/* Smarty version 3.1.32-dev-11, created on 2017-10-18 16:43:34
  from "/var/www/html/blog/styles/templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59e7cb06f1dae6_93708885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c98090654c11439bdc855d90a4c37780d4fce0' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/index.tpl',
      1 => 1508363012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e7cb06f1dae6_93708885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212574454659e7cb06f15948_61748996', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66925404959e7cb06f18dc4_73896262', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "home/GenericTemplate.tpl");
}
/* {block 'title'} */
class Block_212574454659e7cb06f15948_61748996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_212574454659e7cb06f15948_61748996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Principal <?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_66925404959e7cb06f18dc4_73896262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_66925404959e7cb06f18dc4_73896262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="panel panel-heading"> <center><b>Perfl de <?php echo $_SESSION['nombre'];?>
</b></center></div>
            <div class="panel-body" width="95%">
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
