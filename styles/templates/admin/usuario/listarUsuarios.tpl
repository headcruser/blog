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

<script>
   //Pasar despues a un archivo de js
   {literal}
   	function confirmar(url)
	   {
			$.confirm({
			theme: 'light',
			title: 'Eliminar',
			content: '¿Desea eliminar al usuario?',
			autoClose: 'cancelAction|15000',
			animation: 'zoom',
			buttons: 
			{
				deleteUser: 
				{
					btnClass: 'btn-danger',
					text: 'Eliminar',
					action: function () {
						window.location.href=url;
					}
				},
				cancelAction:
				{
					btnClass: 'btn-info',
					text: 'Cancelar',
					action:function () {
					}
				}
			}
		});
	   }
   {/literal}
</script>
