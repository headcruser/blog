<h1>administar usuarios</h1>
<table class="table">
	<tr>
		{section name=columna loop=$variables.campos}
		<th>
			{$variables.campos[columna]}
		</th>
		{/section}
	</tr>
    {section name=renglon loop=$variables.datos}
        <tr>
        	{foreach from=$variables.datos[renglon] item=dato key=name}
        	<td>
        		{$dato}
        	</td>
        	{/foreach}
            <td>
        		<button type="button" class="btn btn-primary">Editar</button>
        		<button type="button" class="btn btn-danger">Eliminar</button>
        	</td>
        </tr>
    {/section}
</table>
</div>
