{include file='overall/declaracion.inc.tpl'}
{include file='overall/navbar.inc.tpl'}
<div class="container" style="width=90%">
    <h1 class="container well text-center">Administrador de usuarios</h1>
    <div class="default col-md-3">
        <div class="list-group">
            <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario" class="list-group-item active">Menú Usuarios</a>
            <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario/listar" class="list-group-item">Administrar Usuarios</a>
            <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario/crear" class="list-group-item">Agregar Usuarios</a>
            <a href="#" class="list-group-item">Reporte Usuario</a>
        </div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="panel panel-primary">
            <div class="panel panel-heading"> 
                <center><b>{if isset($variables.titulo)}{$variables.titulo}{else}Panel Usuarios{/if}</b></center>
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