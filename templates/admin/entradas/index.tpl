{extends file="home/GenericTemplate.tpl"}
{block name=js}
    <script src="{$smarty.const.JS}angular.min.js"></script>
    <script src="{$smarty.const.JS}controladores/EntradaController.js"></script>
    <script src="{$smarty.const.JS}/acciones/eliminar.js"></script>
{/block}
{block name=title} Entradas Disponibles {/block}
{block name=body}
<div class="container panel panel-primary">
    <div class="row">
        <div class"col-md-12">
            <h1 class="panel panel-heading text-center">Administrar entradas</h1>
        </div>
    </div>

    <div class="row">
        <div class="default col-md-3 " >
            <div class="list-group panel panel-primary">
                <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario" class="list-group-item active"> <span class="glyphicon glyphicon-list"></span>  Opciones</a>
                <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario/crear" class="list-group-item"> <i class="fa fa-book"></i> Crear Entrada</a>
                <a href="http://{$smarty.server.SERVER_NAME}/blog/admin/gestor" class="list-group-item">
                        <span class="glyphicon glyphicon-menu-left"></span>Regresar al Gestor</a>
            </div>
        </div>

        <div class="default col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" ng-app="entradaApp" ng-controller="EntradaController">
                        <div class="panel panel-heading text-center"> 
                            <b>Entradas</b>
                        </div>
                        <div class="panel-body">
                            <input type="text" class="form-control" placeholder="Buscar" ng-model="buscarEntrada">
                            <hr>
                            {include file='admin/entradas/listarEntradas.tpl'}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
{/block}