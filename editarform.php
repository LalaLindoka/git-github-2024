
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>

<body>
    <?php
    include("conecta.php");

    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $id_usuario = $_GET["id_usuario"];

    $sql = "SELECT * FROM git";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($resultado);
    ?>
    <form action="editar.php" method="get">
        <input type="text" name="email" value="<?php echo $dados['email']; ?>">
        <input type="text" name="senha" value="<?php echo $dados['senha']; ?>">
        <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario']; ?>">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
