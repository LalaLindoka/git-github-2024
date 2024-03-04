<?php

$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "git";
$conecao = mysql_quer($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if(mysql_connect_errno()){
    echo "Problemas para conectar no banco de dados. Error:";
    echo mysql_connect_errno();
    die();
}
?>