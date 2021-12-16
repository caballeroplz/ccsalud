<!--//BLOQUE COOKIES-->
<?php
if(!$_COOKIE["aceptadas_cookies"]){
?>

<div id="barraaceptacion" style="display: block;">
    <div class="inner">
        <h4>Este sitio web requiere el uso de cookies para poder navegar. Solicitamos su permiso para poder usarlas, en cumplimiento del Real 
        Decreto-ley 13/2012.</h4>
        <a href="javascript:void(0);" " class="ok" onclick="PonerCookie();"><b>OK</b></a> | 
        <a href="civics.php?nombrepag=politica-cookies" target="_blank" class="info">Más información</a>
    </div>
</div>
<?php 
}
?>
<!--//FIN BLOQUE COOKIES-->
<script>
function getCookie(c_name){
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1){
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1){
        c_value = null;
    }else{
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1){
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start,c_end));
    }
    return c_value;
}
 
function setCookie(c_name,value,exdays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}

if(getCookie('aceptadas_cookies')!="1"){
    document.getElementById("barraaceptacion").style.display="block";
}
function PonerCookie(){
    setCookie('aceptadas_cookies','1',365);
    document.getElementById("barraaceptacion").style.display="none";
}
</script>