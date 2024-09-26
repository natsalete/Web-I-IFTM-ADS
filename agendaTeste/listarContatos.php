<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>
    <?php
    $conexao = mysqli_connect("localhost", "root", "1234", "agenda");
    $dados = mysqli_query($conexao, "SELECT * FROM contato");
    ?>
    <ul>
        <?php
        $i = 1;
        while($usuario = mysqli_fetch_array($dados)){
            echo("<li> Contato n°" . $i . ": " . $usuario["nome"] . "</li>");
            $i++;
        }
        ?>
        </ul>
</body>
</html>