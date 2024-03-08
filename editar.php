<?php
$email= $_POST["email"];
$senha= $_POST["senha"];
$id_usuario= $_POST["id_usuario"]; 

include ("conecta.php");

$sql = "UPDATE git SET email = '$email' senha = '$senha' WHERE id_usuario = '$id_usuario'";

if(mysql_query($conexo, $sql)){
    echo "Arquivo enviado com sucesso";
    header('Location: index.php');
}else{
    echo "Falha ao enviar";
}
?>