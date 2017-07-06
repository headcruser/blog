<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-06 16:28:34
  from "/var/www/html/blog/styles/templates/overall/navbar.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_595eab82c6e594_43258960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b3594bfaa1b5215ef1b3b6d1353599fc65b667d' => 
    array (
      0 => '/var/www/html/blog/styles/templates/overall/navbar.inc.tpl',
      1 => 1499376499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595eab82c6e594_43258960 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Este botón despliega la barra de navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php if (isset($_SESSION['nombre'])) {?>
                <a class="navbar-brand" href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin">AdminHS</a>
            <?php } else { ?>
                <a class="navbar-brand" href="home">BlogHS</a>
            <?php }?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <?php if (isset($_SESSION['nombre'])) {?>
                    <li>
                    <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/admin">
                        <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Menu Principal
                    </a>
                    </li>
                <?php } else { ?>
                    <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Entradas
                    </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Favoritos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Autores
                        </a>
                    </li>
                    
                <?php }?>
               
            </ul>
           
            <ul class="nav navbar-nav navbar-right">
            <!-- seccion de registro -->
            <?php if (isset($_SESSION['nombre'])) {?>
                <!-- usuario logeado -->
                 <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><?php echo $_SESSION['email'];?>
</b> 
                          <span class="glyphicon glyphicon-log-in"></span>
                      </a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/blog/home/logout">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true">  
                                         Cerrar Sesion 
                                    </span> 
                                </a>
                            </li>
                        </ul>
                </li>
            <?php } else { ?>
                <!-- usuario no logeado -->
               
                <!-- Login del sistema -->
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <span class="glyphicon glyphicon-user"></span>
                          <b>Login</b> 
                      </a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                 <div class="row">
                                        <div class="col-md-12">
                                            <div class="social-buttons">
                                                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                                            </div>
                                             <form class="form" role="form" method="post" action="home/login" accept-charset="UTF-8" id="login">
                                                    <div class="form-group">
                                                         <label class="sr-only" for="exampleInputEmail2">Correo Electrónico</label>
                                                         <input type="email" class="form-control"
                                                          id="email" 
                                                          name="email" 
                                                          placeholder="Email address">
                                                    </div>
                                                    <div class="form-group">
                                                         <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                                                         <input type="password" class="form-control" 
                                                           id="pasword" 
                                                           name="pasword" 
                                                           placeholder="Password" >
                                                         <div class="help-block text-center">
                                                         <a  href="">
                                                            Olvidaste tu contraseña ?
                                                         </a>
                                                         </div>
                                                    </div>
                                                    <div class="form-group">
                                                         <button type="submit" class="btn btn-primary btn-block" id="btn_login" >Sign in</button>
                                                    </div>
                                             </form>
                                        </div>
                                 </div>
                            </li>
                        </ul>
                </li>
                    <!-- termina login -->
                <li>
                    <a href="registro">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro
                    </a>
                </li>
            <?php }?>
            </ul><!-- termina seccion acceso -->
        </div>
    </div>
</nav><?php }
}
