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
		<tr>
			<td></td>
		</tr>
	</tbody>
</table>
</div>