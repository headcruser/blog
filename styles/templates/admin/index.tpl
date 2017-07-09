{include file='overall/declaracion.inc.tpl'}
{include file='overall/navbar.inc.tpl'}
<div class="container" style="width=90%">
    <h1 class="container well">Administrador Blog headcruser <small>Derechos Reservados</small></h1>
    <div class="default col-md-3">
        <div class="list-group">
            <a href="http://{$smarty.server.SERVER_NAME}/blog/admin" class="list-group-item active">Administrar</a>
            <a href="http://{$smarty.server.SERVER_NAME}/blog/usuario" class="list-group-item">Usuario</a>
            <a href="http://{$smarty.server.SERVER_NAME}/blog/entradas" class="list-group-item">Entradas</a>
            <a href="http://{$smarty.server.SERVER_NAME}/blog/comentarios" class="list-group-item">Comentario</a>
        </div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="panel panel-primary">
            <div class="panel panel-heading"> <center><b>Pagina Principal</b></center></div>
            <div class="panel-body" width="95%">
            </div>
        </div>
    </div>
</div>
{include file='overall/footer.inc.tpl'}
<!-- incluye el cierre de la declaracion -->
{include file='overall/cierre.inc.tpl'}