{extends file="home/GenericTemplate.tpl"}
{block name=title} {$titulo} {/block}
{block name=estilos}
     {*Hojas de estilos*}
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
{/block}
{block name=js}
     {*Archvos para javascript*}
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
{/block}

{block name=body}
    <header>
<!-- Contenedor header -->
    <div class="contenedor">
        <div class="contenedor-texto">
            <div class="texto">
                <h1 class="nombre">Daniel Martinez</h1>
                <h2 class="profesion">Blog headcruser</h2>
            </div>
        </div>
    </div>      
</header>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="div-col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="Busqueda">
                            </div>
                            <button class="form-control"> Buscar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="div-col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Búsqueda
                        </div>
                        <div class="panel-body"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="div-col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
                        </div>
                        <div class="panel-body"></div>
                    </div>
                </div>
            </div>
            
        </div>


        <div class="col-md-8">
             <div class="panel panel-default">
                <div class="panel-heading">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>  Últimas Entradas
                </div>
                <div class="panel-body">
                   <p>sin entradas</p>
                    {$smarty.server.SERVER_NAME}
                    {$smarty.const.RUTA_BASE}
                </div>
            </div>
        </div>
        
    </div>
</div>

{/block}