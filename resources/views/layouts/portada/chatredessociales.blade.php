<style>
    .appwhatsapp{
        position:fixed;
        right: 31px;
        bottom: 100px;
        width: 60px;
        z-index: 1000;
    }

</style>
<!--Whatssapp-->
 <a  href="https://api.whatsapp.com/send?phone=+51900888593&text=Hola!%20¿Me%20pueden%20apoyar?" target="_blank">
     <img src="{{asset('images/empresa/whatsapp1.svg')}}" height="55" width="70" class="appwhatsapp">

 </a>
<!--Messenger-->
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="105277061219089"
     logged_in_greeting="Hola! ¿Cómo podemos ayudarte?"
     logged_out_greeting="Hola! ¿Cómo podemos ayudarte?">
</div>
