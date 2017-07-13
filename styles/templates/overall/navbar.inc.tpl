 <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Este botón despliega la barra de navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {if isset($smarty.session.nombre)}
                <a class="navbar-brand" href="http://{$smarty.server.SERVER_NAME}/blog/admin">AdminHS</a>
            {else}
                <a class="navbar-brand" href="home">BlogHS</a>
            {/if}
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                {if isset($smarty.session.nombre)}
                {else}
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
                    
                {/if}
               
            </ul>
           
            <ul class="nav navbar-nav navbar-right">
            <!-- seccion de registro -->
            {if isset($smarty.session.nombre)}
                <!-- usuario logeado -->
                 <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>{$smarty.session.email}</b> 
                          <span class="glyphicon glyphicon-log-in"></span>
                      </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="http://{$smarty.server.SERVER_NAME}/blog/auth/logout">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true">  
                                    </span> 
                                    Cerrar Sesión 
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true">  
                                    </span> 
                                    Mi perfil 
                                </a>
                            </li>

                        </ul>
                </li>
            {else}
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
                                             {include file='home/login.tpl'}
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
            {/if}
            </ul><!-- termina seccion acceso -->
        </div>
    </div>
</nav>