{extends file="home/GenericTemplate.tpl"}
{block name=title} Principal {/block}
{block name=body}
<div class="container panel panel-primary" style="width=90%">
    <h1 class="panel panel-heading text-center">Administrador Blog headcruser</h1>
    <div class=" col-md-3 " >
        <div class="sidebar-nav navbar-collapse panel">
			<ul class="nav" id="side-menu">
				<li class="sidebar-search">
					<div class="input-group custom-search-form" >
						<input type="text" class="form-control" placeholder="Buscar Entradas...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
					<!-- /input-group -->
				</li>
				<li>
					<a href="#"><i class="fa fa-wrench fa-fw">
                        </i> Administracion<span class="fa arrow"></span>
                    </a>
					<ul class="nav nav-second-level">
						<li>
							<a href="http://{$smarty.server.SERVER_NAME}/blog/usuario">Usuarios</a>
						</li>
						<li>
							<a href="#">Privilegios</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
			</ul>
		</div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="panel panel-primary">
            <div class="panel panel-heading"> <center><b>Perfl de {$smarty.session.nombre}</b></center></div>
            <div class="panel-body" width="95%">
            </div>
        </div>
    </div>
</div>
{/block}