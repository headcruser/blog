{extends file="home/GenericTemplate.tpl"}
{block name=title} Gestor {/block}
{block name=body}
<div class="container panel panel-primary" style="width=90%">
    <h1 class="panel panel-heading text-center">Gestor del Blog</h1>
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
				</li>
				<li>
					<a href="http://{$smarty.server.SERVER_NAME}/blog/admin"><i class="fa fa-dashboard fa-fw"></i> Entradas</a>
				</li>

				<li>
					<a href="http://{$smarty.server.SERVER_NAME}/blog/admin/entradas"><i class="fa fa-table fa-fw"></i>Comentarios</a>
				</li>
				<li>
					<a href="http://{$smarty.server.SERVER_NAME}/blog/admin/comentarios"><i class="fa fa-edit fa-fw"></i> Favoitos</a>
				</li>
			</ul>
		</div>
    </div>
    <div class="default col-md-9" style="height=200%">
        <div class="row text-center">
            <div class="col-md-4" id="gg-entradas">
                <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i></h2>
                <h3>Entradas</h3>
                <hr>
                <h4>Mi entrada</h4>
            </div>    

            <div class="col-md-4" id="gg-comentarios">
                <h2><i class="fa fa-comments"></i></h2>
                <h3>Comentarios</h3>
                <hr>
                <h4>Mi entrada</h4>
            </div>    

            <div class="col-md-4" id="gg-favoritos">
                <h2><i class="fa fa-star" aria-hidden="true"></i></h2>
                <h3>Favoritos</h3>
                <hr>
                <h4>Mi entrada</h4>
            </div>    

        </div>
    </div>
</div>
{/block}