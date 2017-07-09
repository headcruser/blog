<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-09 13:24:14
  from "/var/www/html/blog/styles/templates/admin/usuario/listarUsuarios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_596274ce557446_88442985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c68b7aeee595e0a6e1c444a554d779a3f85c806' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/usuario/listarUsuarios.tpl',
      1 => 1499620635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596274ce557446_88442985 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>administar usuarios</h1>
<table class="table">
	<tr>
		<?php
$__section_columna_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_columna']) ? $_smarty_tpl->tpl_vars['__smarty_section_columna'] : false;
$__section_columna_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['variables']->value['campos']) ? count($_loop) : max(0, (int) $_loop));
$__section_columna_0_total = $__section_columna_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_columna'] = new Smarty_Variable(array());
if ($__section_columna_0_total != 0) {
for ($__section_columna_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columna']->value['index'] = 0; $__section_columna_0_iteration <= $__section_columna_0_total; $__section_columna_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columna']->value['index']++){
?>
		<th>
			<?php echo $_smarty_tpl->tpl_vars['variables']->value['campos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_columna']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columna']->value['index'] : null)];?>

		</th>
		<?php
}
}
if ($__section_columna_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_columna'] = $__section_columna_0_saved;
}
?>
		<th>
			Acción
		</th>
	</tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variables']->value['datos'], 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
	<tr>
        <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['nombre'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['email'];?>
</td>
		<td>
			<a class="btn btn-primary" href="usuario/editar/<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id'];?>
">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
			<button class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span></button>
		</td>
	</tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</table>
</div>
<?php }
}
