<table class="table table-condensed table-hover">
	<thead>
		<tr>
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
		<tr ng-repeat="entrada in entradas | filter:buscarEntrada">
			<td>[[ entrada.id ]]</td>
			<td>[[ entrada.url ]]</td>
			<td>[[ entrada.titulo ]]</td>
			<td>[[ entrada.fecha ]]</td>
			<td ng-if="entrada.activa == 1">Activada</td>
			<td ng-if="entrada.activa == 0">Desactivada</td>
			<td>
				<a class="btn btn-primary" href="">
					<span class="glyphicon glyphicon-pencil"></span>
				</a>
				<a class="btn btn-danger" 
					onclick="confirmar('#')"> 
					<span class="glyphicon glyphicon-trash"></span>
				</a>
			</td>
		</tr>
	</tbody>
</table>