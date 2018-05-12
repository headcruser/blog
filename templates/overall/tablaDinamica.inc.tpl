<table class="table">
	<tr>
		{section name=columna loop=$campos}
		<th>
			{$campos[columna]}
		</th>
		{/section}
	</tr>
    {section name=renglon loop=$datos}
        <tr>
        	{foreach from=$datos[renglon] item=dato key=name}
        	<td>
        		{$dato}
        	</td>
        	{/foreach}
        </tr>
    {/section}
</table>
</div>