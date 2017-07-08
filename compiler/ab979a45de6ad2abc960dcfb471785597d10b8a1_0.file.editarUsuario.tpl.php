<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-07 23:27:11
  from "/var/www/html/blog/styles/templates/admin/editarUsuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59605f1fd63628_62221204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab979a45de6ad2abc960dcfb471785597d10b8a1' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/editarUsuario.tpl',
      1 => 1499488027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59605f1fd63628_62221204 (Smarty_Internal_Template $_smarty_tpl) {
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
	</tr>
    <?php
$__section_renglon_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_renglon']) ? $_smarty_tpl->tpl_vars['__smarty_section_renglon'] : false;
$__section_renglon_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['variables']->value['datos']) ? count($_loop) : max(0, (int) $_loop));
$__section_renglon_1_total = $__section_renglon_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_renglon'] = new Smarty_Variable(array());
if ($__section_renglon_1_total != 0) {
for ($__section_renglon_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_renglon']->value['index'] = 0; $__section_renglon_1_iteration <= $__section_renglon_1_total; $__section_renglon_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_renglon']->value['index']++){
?>
        <tr>
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variables']->value['datos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_renglon']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_renglon']->value['index'] : null)], 'dato', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['dato']->value) {
?>
        	<td>
        		<?php echo $_smarty_tpl->tpl_vars['dato']->value;?>

        	</td>
        	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <td>
        		<button type="button" class="btn btn-primary">Editar</button>
        		<button type="button" class="btn btn-danger">Eliminar</button>
        	</td>
        </tr>
    <?php
}
}
if ($__section_renglon_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_renglon'] = $__section_renglon_1_saved;
}
?>
</table>
</div>
<?php }
}
