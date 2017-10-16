{extends file="error/error.tpl"}
{block name=cuerpo}
    <header class"container">
        <div class="jumbotron">
            <h1 class="text-center">
                {block name=tituloError}Exception Blog{/block}
            </h1>
        </div>
    </header>
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                {block name=message}
                    {if isset($message)}        
                    <div class="alert alert-danger text-center ">
                            <strong>Danger!</strong> {$message}
                    </div>
                    {else}
                        Mensaje Generico
                    {/if}
                {/block}
            </div>
        </div>
    </section>
{/block}