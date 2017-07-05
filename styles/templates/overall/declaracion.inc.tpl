<!-- Declaracion del documento html -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        {if isset($titulo)}
            <title>{$titulo}</title>
        {/if}

        <link rel="stylesheet" href="{$smarty.const.CSS}bootstrap.min.css"/>
        <link rel="stylesheet" href="{$smarty.const.CSS}font-awesome.min.css">        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" 
              rel="stylesheet"> 
        <link rel="stylesheet" href="{$smarty.const.CSS}normalize.css">
        <link rel="stylesheet" href="{$smarty.const.CSS}overhang.min.css"/>
        <link rel="stylesheet" href="{$smarty.const.CSS}bootstrapValidator.min.css"/>
        <link rel="stylesheet" href="{$smarty.const.CSS}login.css"/>
        <link rel="stylesheet" href="{$smarty.const.CSS}estilos.css"/>
        
    </head>
<body>


