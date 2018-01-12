{extends file="home/GenericTemplate.tpl"}
{block name=title} {$titulo} {/block}
{block name=body}
{* Contenedor de titulo *}
{* {$smarty.server.SERVER_NAME}
{$smarty.const.RUTA_BASE} *}
<header>
    <div class="contenedor">
        <div class="contenedor-texto">
            <div class="texto">
                <h1 class="nombre">Daniel Martinez</h1>
                <h2 class="profesion">Blog headcruser</h2>
            </div>
        </div>
    </div>
</header>
{* Contenedor pricipal *}
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
                            <button class="form-control btn-primary"> Buscar</button>
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
        {if isset($datos)}
        {foreach $datos as $elemento}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>  {$elemento.titulo}
                            </div>
                            <div class="panel-body">
                                <p>
                                    <strong>{$elemento.fecha|date_format}</strong>
                                </p>
                                <article class="text-justify">
                                    {$elemento.texto|nl2br|truncate:250:"...":true}
                                </article>
                                <div class="text-right">
                                    <a class="btn btn-primary" href="http://{$smarty.server.SERVER_NAME}/blog/home/articulo" role="button">Seguir Leyendo</a>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        {/foreach}
        {else}
             <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>  Titulo
                            </div>
                            <div class="panel-body">
                                <p>
                                    <strong>{$router->url('blog.entradas')}</strong>
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        {/if}

         <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>

        </div>
    </div>
</div>
{/block}