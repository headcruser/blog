<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
  	<meta name="description" content="Es un blog Sencillo">
  	<meta name="keywords" content="Blog,headcruser">
  	<meta name="author" content="Daniel Martinez Sierra">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<base href="/">

      {* Estilos para todas las paginas *}
      <link rel="stylesheet" href="{$smarty.const.CSS}bootstrap.min.css"/>
      <link rel="stylesheet" href="{$smarty.const.CSS}font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700"
              rel="stylesheet">
      <link rel="stylesheet" href="{$smarty.const.CSS}normalize.css">
      <link rel="stylesheet" href="{$smarty.const.CSS}overhang.min.css"/>
      <link rel="stylesheet" href="{$smarty.const.CSS}bootstrapValidator.min.css"/>
      <link rel="stylesheet" href="{$smarty.const.CSS}login.css"/>
      <link rel="stylesheet" href="{$smarty.const.CSS}estilos.css"/>
      <link rel="stylesheet" href="{$smarty.const.CSS}jquery-confirm.min.css"/>
      <link rel="stylesheet" href="{$smarty.const.CSS}jquery.dataTables.min.css"/>
      <link rel="stylesheet" href="{$smarty.const.CSS}dataTables.bootstrap.min.css"/>
      {*Estilos para el panel administrador*}
      <link rel="stylesheet" href="{$smarty.const.CSS}/metisMenu/metisMenu.min.css"/>
      <link rel="stylesheet" href="{$smarty.const.CSS}/metisMenu/sb-admin-2.css"/>
      {block name=estilos}{/block}{* Hojas de Estilo que se deben agregar*}
      <script src="{$smarty.const.JS}jquery.js"></script>
      <script src="{$smarty.const.JS}bootstrap.min.js"></script>
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
      <script src="{$smarty.const.JS}bootstrapValidator.min.js"></script>
      <script src="{$smarty.const.JS}jquery-confirm.min.js"></script>
      <script src="{$smarty.const.JS}validarRegistro.js"></script>
      <script src="{$smarty.const.JS}overhang.min.js"></script>
      <script src="{$smarty.const.JS}inicioSesion.js"></script>
      <script src="{$smarty.const.JS}jquery.dataTables.min.js"></script>
      <script src="{$smarty.const.JS}dataTables.bootstrap.js"></script>
      {*Archivos para menus*}
      <script src="{$smarty.const.JS}metisMenu/metisMenu.min.js"></script>
      <script src="{$smarty.const.JS}metisMenu/sb-admin-2.js"></script>
      {block name=js}{/block} {*Archvos para javascript*}
      {block name=shortIcon} {* Icono para pestañas*}
        <link rel="shortcut icon" href="{$smarty.const.IMG}iconPrincipal.ico"/>
      {/block}

    <title>{block name=title}TITULO DEFAULT{/block}</title>
  </head>
  <body>        {* Cuerpo del documento  *}

		{block name=menu}
			{include file='overall/navbar.inc.tpl'}
		{/block}

    {block name=body} {* Seccion principal *}
        Default Body
    {/block}
    <footer>
      {block name=footer}
        {include file='overall/footer.inc.tpl'}
      {/block}
    </footer>
  </body>
</html>