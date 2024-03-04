<?php
$email= $_POST["email"];
$senha= $_POST["senha"];

include ("conecta.php");

$sql = "INSERT INTO git(email, senha) VALUES($email,$senha)";

if(mysql_query($conexo, $sql)){
    echo "Arquivo enviado com sucesso";
    header('Location: index.php');
}else{
    echo "Falha ao enviar";
}