<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-04 14:54:59
  from "/var/www/html/blog/styles/templates/admin/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_595bf2935004c9_86464814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c77612718dd65ea58a44ba5fa0cdccb511f2cff' => 
    array (
      0 => '/var/www/html/blog/styles/templates/admin/admin.tpl',
      1 => 1498316318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/declaracion.inc.tpl' => 1,
    'file:overall/navbar.inc.tpl' => 1,
    'file:overall/footer.inc.tpl' => 1,
    'file:overall/cierre.inc.tpl' => 1,
  ),
),false)) {
function content_595bf2935004c9_86464814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:overall/declaracion.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender('file:overall/navbar.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   

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
                    <p><span class="post-fecha">26 de Enero de 2015</span> por <span class="post-autor"><a href="#"><?php echo $_SESSION['nombre'];?>
</a></span></p>
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


    <?php $_smarty_tpl->_subTemplateRender('file:overall/footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- incluye el cierre de la declaracion -->
    <?php $_smarty_tpl->_subTemplateRender('file:overall/cierre.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
