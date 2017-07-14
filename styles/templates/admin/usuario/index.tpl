{include file='overall/declaracion.inc.tpl'}
{include file='overall/navbar.inc.tpl'}
<div class="container panel panel-body" style="width=90%">
    <h1 class="panel panel-heading text-center">Administrador de usuarios</h1>
    <div class="default col-md-3">
        <div class="list-group">
            <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario" class="list-group-item active"> <span class="glyphicon glyphicon-list"></span> Menú </a>
            <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario/listar" class="list-group-item"><span class="glyphicon glyphicon-wrench"></span> Administrar Usuario</a>
            <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario/crear" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Crear usuario</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-file"></span> Reporte Usuario</a>
            <a href="http://{$smarty.server.SERVER_NAME}/blog/admin" class="list-group-item">
                    <span class="glyphicon glyphicon-menu-left"></span>Regresar a menu Principal</a>
        </div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="panel panel-primary">
            <div class="panel panel-heading"> 
                <center><b>{if isset($variables.panelTitulo)}{$variables.panelTitulo}{else}Panel{/if}</b></center>
            </div>
            <div class="panel-body" width="95%">
            {if isset($variables.alerta)}
                 <div class="alert alert-danger">
                    	<a href="http://{$smarty.server.SERVER_NAME}/blog/usuario/crear" 
                        type="button" class="close" data-dismiss="alert">&times;</a>
                    	<strong>Error! </strong> {$variables.alerta}
                </div>
            {/if}

            {if isset($variables.accion)}
                {if $variables.accion eq 1}
                    {include file='admin/usuario/crearUsuario.tpl'}
                {/if}
                {if $variables.accion eq 2}
                    {include file='admin/usuario/listarUsuarios.tpl'}
                {/if}
                    
                {/if}
    
            </div>
        </div>
    </div>
</div>
{include file='overall/footer.inc.tpl'}
<!-- incluye el cierre de la declaracion -->
{include file='overall/cierre.inc.tpl'}