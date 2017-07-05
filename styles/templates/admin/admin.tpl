{include file='overall/declaracion.inc.tpl'}
{include file='overall/navbar.inc.tpl'}
<div class="container">
    <div class="jumbotron">
        <h1>Bienvenido Administrador</h1>
        <p> 
            Pagina para la administración del sistema
        </p>            
    </div>
</div>

<section class="main container">
    <div class="row">
        <section class="posts col-md-9">
            <div class="miga-de-pan">
                <ol class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Categorias</a></li>
                </ol>
            </div>

            <article class="post clearfix">
                <a href="#" class="thumb pull-left">
                    <img class="img-thumbnail" src="img/img1.jpg" alt="">
                </a>
                <h2 class="post-title">
                    <a href="#">Inicia proyectos HTML5 mas rápido con Initializr</a>
                </h2>
                <p><span class="post-fecha">26 de Enero de 2015</span> por <span class="post-autor"><a href="#">{$smarty.session.nombre}</a></span></p>
                <p class="post-contenido text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <div class="contenedor-botones">
                    <a href="#" class="btn btn-primary">Leer Mas</a>
                    <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
                </div>
            </article>

            <nav>
                <div class="center-block">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo; <span class="sr-only">Siguiente</span></a></li>
                    </ul>
                </div>
            </nav>
        </section>

        <aside class="col-md-3 hidden-xs hidden-sm">
            <h4>Categorias</h4>
            <div class="list-group">
                <a href="#" class="list-group-item active">Diseño Web</a>
                <a href="#" class="list-group-item">CSS</a>
                <a href="#" class="list-group-item">Cursos</a>
                <a href="#" class="list-group-item">Desarrollo Web</a>
                <a href="#" class="list-group-item">Elementos Web</a>
                <a href="#" class="list-group-item">Jquery</a>
                <a href="#" class="list-group-item">Recursos y Herramientas</a>
            </div>

            
        </aside>
    </div>
</section>
    
    {include file='overall/footer.inc.tpl'}
    <!-- incluye el cierre de la declaracion -->
    {include file='overall/cierre.inc.tpl'}