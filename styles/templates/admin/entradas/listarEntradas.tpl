<table id="tbl_entradas" class="table table-condensed display panel panel-primary" cellspacing="0" width="100%">
	<thead>
		<tr class="panel-heading">
			{section name=columna loop=$campos}
				<th>
					{$campos[columna]}
				</th>
			{/section}
			<th>
				Acción
			</th>
		</tr>
	</thead>
	<tbody>

		{foreach $datos as $elemento}
		<tr>
			<td>{$elemento.id}</td>
			<td>
				<a class="btn btn-primary" href="http://{$smarty.server.SERVER_NAME}/blog/usuario/editar/{$elemento.id}">
					<span class="glyphicon glyphicon-pencil"></span>
				</a>
				<button class="btn btn-danger" 
					onclick="confirmar('http://{$smarty.server.SERVER_NAME}/blog/usuario/eliminar/{$elemento.id}')"> 
					<span class="glyphicon glyphicon-trash"></span>
				</button>
			</td>
		</tr>
		{/foreach}
	</tbody>
</table>
</div>
<script src="{$smarty.const.JS}/acciones/eliminar.js"></script>
<script src="{$smarty.const.JS}/tablas/tbl_entradas.js"></script>