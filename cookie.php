<?php
if(isset($HTTP_POST_VARS["no induk"]))
{
    setcookie("cookie no induk",$HTTP_POST_VARS["noinduk"]);
}
?>
<html>
    <head>
        <title>cookies</title>
</head>
<body>
    <h2> Penggunaan Cookies </h2>
    <pre>
        <form  action="cookie.php" method="post">
            No. Induk : <input type="text" name="no_induk" size="10"> <input
            type="sumbit" name="go" value="GO">
</form>
<?php
if(isset($HTTP_POST_VARS["no induk"]))
{
    echo("Klik <A href=\"cek_cookie.php\">disini</a> untuk melihat data cookies");
}
?>
</pre>
</body>
</html>
