<h1>administar usuarios</h1>
<table class="table">
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
			<a class="btn btn-primary" href="usuario/editar/{$elemento.id}">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
			<button class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span></button>
		</td>
	</tr>
    {/foreach}
</table>
</div>
