{include file='overall/declaracion.inc.tpl'}
{include file='overall/navbar.inc.tpl'}
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

    {include file='overall/footer.inc.tpl'}
    <!-- incluye el cierre de la declaracion -->
    {include file='overall/cierre.inc.tpl'}