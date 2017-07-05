<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-04 14:39:46
  from "/var/www/html/blog/styles/templates/home/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_595bef02873881_44772907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c03da595b9e362066eec52ba921e96e5116845' => 
    array (
      0 => '/var/www/html/blog/styles/templates/home/index.tpl',
      1 => 1499051127,
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
function content_595bef02873881_44772907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:overall/declaracion.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<header>
    <div class="container">
        <div class="row">
            <div class="logo col-xs-12 col-sm-6">
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
social/fb.png" alt="Logo del Blog headcruser"></a>
            </div>
            <div class="redes col-xs-12 col-sm-6">
                <a href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
                <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
            </div>
        </div>
    </div>    
</header>
<?php $_smarty_tpl->_subTemplateRender('file:overall/navbar.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                        
                      
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:overall/footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- incluye el cierre de la declaracion -->
    <?php $_smarty_tpl->_subTemplateRender('file:overall/cierre.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
