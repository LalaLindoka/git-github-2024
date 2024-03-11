<?php
$email= $_POST["email"];
$senha= $_POST["senha"];

include ("conecta.php");

$sql = "UPDATE git SET email = '$email' senha = '$senha' ";//continuar

if(mysqli_query($conexo, $sql)){
    echo "Arquivo enviado com sucesso";
    header('Location: index.php');
}else{
    echo "Falha ao enviar";
}