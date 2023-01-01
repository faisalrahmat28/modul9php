<?php
sessioin_star();
if(isset($HTTP_SESSION_VARS["session_status"]))
{
    echo("<pre>");
    echo("User Name :<b>".$HTTP_SESSION_VARS["session_user"]."</b><br>);
    echo("password :<b>".$HTTP_SESSION_VARS["session password"]."</b><br>");
    echo("Click <a href=\"loggout.php\">loggout</a> untuk keluar !");
    echo("</pre");
}else
{
    header("location: loggin.php");
    exit;
}
?>