{include file='overall/declaracion.inc.tpl'}
{include file='overall/navbar.inc.tpl'}
<div class="container" style="width=90%">
    <h1 class="container well">Administrador Blog headcruser <small>Derechos Reservados</small></h1>
    <div class="default col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active">Menú Usuarios</a>
            <a href="http://{$smarty.server.SERVER_NAME}/blog/admin/altaUsuario" class="list-group-item">Agregar Usuarios</a>
            <a href="#" class="list-group-item">Administrar Usuarios</a>
            <a href="#" class="list-group-item">Reporte Usuario</a>
        </div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="panel panel-primary">
            <div class="panel panel-heading"> <center><b>Agregar Usuario</b></center></div>
            <div class="panel-body" width="95%">
                {if isset($variables.mensaje)}
                    {$variables.mensaje}
                {/if}

                {if isset($variables.accion)}
                    {if $variables.accion eq 1}
                        {include file='admin/crearUsuario.tpl'}
                    {/if}
                    {if $variables.accion eq 2}
                        {include file='admin/editarUsuario.tpl'}
                    {else}
                        Bienvenido al index principal
                    {/if}
                        
                 {/if}
            </div>
        </div>
    </div>

</div>
{include file='overall/footer.inc.tpl'}
<!-- incluye el cierre de la declaracion -->
{include file='overall/cierre.inc.tpl'}