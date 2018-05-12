{extends file="home/GenericTemplate.tpl"}
{block name=title} Acceder al sistema {/block}
{block name=body}
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" id="login-dp">
            <div class="social-buttons">
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            </div>
                {include file='home/login.tpl'}
        </div>
        <div class="col-md-4"></div>
    </div>
    <br>
</div>
{/block}