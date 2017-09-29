<?php
/* Smarty version 3.1.32-dev-11, created on 2017-09-29 16:27:01
  from "/var/www/html/blog/styles/templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59cebaa5bf2670_79637563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c98090654c11439bdc855d90a4c37780d4fce0' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/index.tpl',
      1 => 1506720416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cebaa5bf2670_79637563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28529988959cebaa5bdde00_55368325', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173528582659cebaa5be0467_89724599', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "home/GenericTemplate.tpl");
}
/* {block 'title'} */
class Block_28529988959cebaa5bdde00_55368325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_28529988959cebaa5bdde00_55368325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Principal <?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_173528582659cebaa5be0467_89724599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_173528582659cebaa5be0467_89724599',
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
					<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin"><i class="fa fa-dashboard fa-fw"></i> Principal</a>
				</li>

				<li>
					<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin/entradas"><i class="fa fa-table fa-fw"></i>Entradas</a>
				</li>
				<li>
					<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin/comentarios"><i class="fa fa-edit fa-fw"></i> Comentarios</a>
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
