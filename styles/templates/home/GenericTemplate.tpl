<!DOCTYPE html>
<html lang="es">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{block name=title}TITULO DEFAULT{/block}</title>
        {block name=estilos}No hay estilos{/block}
        {block name=js}no hay Js{/block}
        {block name=menu} 
            {include file='overall/navbar.inc.tpl'}
        {/block}
  </head>
  <body>
    {block name=body}Default Body{/block}
  </body>
        {block name=footer} 
                {include file='overall/footer.inc.tpl'}
        {/block}
</html>