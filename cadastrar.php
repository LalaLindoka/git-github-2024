<?php
$email= $_POST["email"];
$senha= $_POST["senha"];

include ("conecta.php");

$sql = "INSERT INTO git(email, senha) VALUES('$email', '$senha')";

if(mysqli_query($conexao, $sql)){
    echo "Arquivo enviado com sucesso";
    header('Location: index.php');
}else{
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    echo "Falha ao enviar";
}