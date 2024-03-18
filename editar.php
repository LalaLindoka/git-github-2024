<?php
$email = $_GET['email'];
$senha = $_GET['senha'];
$id_usuario = $_GET['id_usuario'];

include("conecta.php");

$sql = "UPDATE git SET email = '$email', senha = '$senha' WHERE id_usuario= '$id_usuario'";

if (mysqli_query($conexao, $sql)) {
    echo "Arquivo enviado com sucesso!";
    header('Location: index.php');
} else {
    echo "Falha ao enviar arquivo.";
}