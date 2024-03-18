<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tópicos Aula</title>
</head>

<body>
    <a href="cadastrar.html">Cadastrar</a>
    <?php

    include("conecta.php");

    $sql = "SELECT * FROM git";

    $resultado = mysqli_query($conexao, $sql);


    echo '<table>
    <tr>
    <strong>
      <th scope="col">ID_usuario</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Opções</th>
    </strong>
    </tr>';

    while ($dados = mysqli_fetch_assoc($resultado)) {
        echo "<td> " . $dados['id_usuario'] . " </td>";
        echo "<td> " . $dados['email'] . "</td>";
        echo "<td> " . $dados['senha'] . "</td>";
        echo "<td><a href='editarForm.php?id_usuario=" . $dados['id_usuario'] ."&email=" . $dados['email'] . "&senha=" . $dados['senha'] . "'>" . "Editar" . "</a>";
        echo " <a href='excluir.php?id_usuario=" . $dados['id_usuario'] . "'>" . "Exluir" . "</a></td>";
        echo '</tr>';
    }
    echo '</table>';

    ?>
</body>

</html>