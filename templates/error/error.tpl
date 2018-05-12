<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{$smarty.const.CSS}bootstrap.min.css"/>
	<link rel="stylesheet" href="{$smarty.const.CSS}font-awesome.min.css">        
	<link rel="stylesheet" href="{$smarty.const.CSS}normalize.css">
	<link rel="stylesheet" href="{$smarty.const.CSS}estilos.css"/>
	<title>Version: {$smarty.version}</title>
</head>
	<body>
		{block name=cuerpo}
		<div class="container">
			<div class="panel-footer border border-primary">
				<div class="jumbotron">
					<h1 class="text-center">{block name=tituloError}TipoError{/block}</h1>
				</div>
				
				<p class="text-center">{block name=message}Mensaje Adicional{/block}</p>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="container-fluid">
							<a class="container-fluid btn btn-default btn-primary"
								href="http://{$smarty.server.SERVER_NAME}/blog/home">
								<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Regresar
							</a>
							
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	{/block}

		{block name=footer}
		<footer> 
			{include file='overall/footer.inc.tpl'}
		</footer>
		{/block}
	</body>
</html>