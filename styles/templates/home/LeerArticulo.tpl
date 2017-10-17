{extends file="home/GenericTemplate.tpl"}
{block name=title} Articulo {/block}
{block name=body}
    <div class="container contenedor-articulo">
        <div class="row">
            <div class="col-md-12">
                <h1>Mi Articulo</h1>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <p> 
                    por:
                    <a href="#"><span class="glyphicon glyphicon-user"></span></a>
                    fecha
                </p>

            </div>
        </div>  
    </div>

{/block}