<table id="tbl_comentarios" class="table table-condensed display panel panel-primary" cellspacing="0" width="100%">
	<thead>
		<tr class="panel-heading">
			{section name=columna loop=$campos}
				<th>
					{$campos[columna]}
				</th>
			{/section}
			
		</tr>
	</thead>
	<tbody>

		{foreach $datos as $elemento}
		<tr>
			<td>{$elemento.id}</td>
            <td class="text-center">{$elemento.titulo}</td>
		</tr>
		{/foreach}
	</tbody>
</table>
</div>
<script src="{$smarty.const.JS}/acciones/eliminar.js"></script>
<script src="{$smarty.const.JS}/tablas/tbl_comentarios.js"></script>