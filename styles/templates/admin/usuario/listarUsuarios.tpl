<h1 class="text-center">Administar usuarios</h1>
<table class="table" id="tbl_usuario">
	<tr>
		{section name=columna loop=$variables.campos}
		<th>
			{$variables.campos[columna]}
		</th>
		{/section}
		<th>
			Acción
		</th>
	</tr>

    {foreach $variables.datos as $elemento}
	<tr>
        <td>{$elemento.id}</td>
		<td>{$elemento.nombre}</td>
		<td>{$elemento.email}</td>
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
</table>
</div>
<script src="{$smarty.const.JS}/acciones/eliminar.js"></script>
<script src="{$smarty.const.JS}/tablas/tbl_usuarios.js"></script>
