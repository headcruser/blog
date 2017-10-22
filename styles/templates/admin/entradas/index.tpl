{extends file="home/GenericTemplate.tpl"}
{block name=title} Entradas Disponibles {/block}
{block name=body}
<div class="container-fluid panel panel-primary">
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
                <div class="panel panel-primary">
                    <div class="panel panel-heading text-center"> 
                        <b>Entradas del usuario {$smarty.session.nombre}</b>
                    </div>
                    <div class="panel-body" width="95%">
                    {if isset($alerta)}
                        <div class="alert alert-danger">
                                <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario/crear" 
                                type="button" class="close" data-dismiss="alert">&times;</a>
                                <strong>Error! </strong> {$variables.alerta}
                        </div>
                    {/if}
                    {if isset($accion)}
                        {if $accion eq 1}
                            {include file='admin/usuario/crearUsuario.tpl'}
                        {/if}
                        {if $accion eq 2}
                            {include file='admin/entradas/listarEntradas.tpl'}
                        {/if}
                            
                    {/if}
            
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
</div>
{/block}