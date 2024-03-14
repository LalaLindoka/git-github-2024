<?php

include("conecta.php");

$id_usuario = $_GET['id_usuario'];

$sql = "DELETE FROM git WHERE id_usuario=$id_usuario";

if (mysqli_query($conexao, $sql)) {
    echo "Arquivo enviado com sucesso!";
    header('Location: index.php');
} else {
    echo "Falha ao enviar arquivo.";
}