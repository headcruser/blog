{extends file="home/GenericTemplate.tpl"}
{block name=title} Gestor {/block}
{block name=body}
<div class="container panel panel-primary" >
    <div class="row">
        <div class="col-md-12">
            <h1 class="panel panel-heading text-center">Gestor del Blog</h1>
        </div>
    </div>
    
    <div class=" col-md-3 " >
        <div class="row">
            <div class=" col-md-12 " >
                <div class="list-group panel panel-primary">
                    <a href="http://{$smarty.server.SERVER_NAME}/blog/admin/gestor" class="list-group-item active">  <i class="fa fa-bars"></i> Menú </a>
                    <a href="http://{$smarty.server.SERVER_NAME}/blog/admin/entradas" class="list-group-item"><i class="fa fa-sticky-note-o"></i> Entradas</a>
                    <a href="http://{$smarty.server.SERVER_NAME}/blog/admin/comentarios" class="list-group-item"><i class="fa fa-commenting-o"></i> Comentarios</a>
                    <a href="http://{$smarty.server.SERVER_NAME}/blog/admin/favoritos" class="list-group-item"><i class="fa fa-heart"></i> Favoritos</a>
                    <a href="http://{$smarty.server.SERVER_NAME}/blog/admin" class="list-group-item"><i class="fa fa-reply"></i> Menu Principal</a>
                </div>
            </div>
        </div>
    </div>
    <div class="default col-md-9" sytle="margin-bottom: 25px" >
        <div class="row text-center">
            <div class="col-md-4 gg-elemento" id="gg-entradas">
                <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i></h2>
                <h3>Entradas</h3>
                <hr>
                <h4>0</h4>
                <br>
                <h5>Entradas publicadas</h5>
                <br>
                <h4>0</h4>
                <br>
                <h5>Borradores</h5>
            </div>    

            <div class="col-md-4 gg-elemento" id="gg-comentarios">
                <h2><i class="fa fa-comments"></i></h2>
                <h3>Comentarios</h3>
                <hr>
                <h4>0</h4>
                <br>
                <h5>Comentarios Escritos</h5>
                <br>
                <h4>0</h4>
                <br>
                <h5>Comentarios bloqueados</h5>
            </div>    

            <div class="col-md-4 gg-elemento" id="gg-favoritos">
                <h2><i class="fa fa-star" aria-hidden="true"></i></h2>
                <h3>Favoritos</h3>
                <hr>
                <h4>0</h4>
                <br>
                <h5>Entradas Favoritas</h5>
                <br>
                <h4>0</h4>
                <br>
                <h5>Autores Favoritos </h5>
            </div>
        </div>
    </div>
</div>
{/block}