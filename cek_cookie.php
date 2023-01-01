<?php
if(isset($HTTP_COOKIE_VARS["cookie no induk"]))
{
    echo("Isi data <b>".$HTTP_COOKIE_VARS["cookie no induk"].
    "</b><br>") ;
    echo("Click <a href=\"cookie_destory.php\">next</a>
    untuk menghapus id !") ;
}else
{
    header("Location: cookie.php") ;
    exit ;
}
?>