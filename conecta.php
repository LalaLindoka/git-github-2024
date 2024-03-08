<?php

$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "git";
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if(mysqli_connect_errno()){
    echo "Problemas para conectar no banco de dados. Error:";
    echo mysqli_connect_error();
    die();
}
?>