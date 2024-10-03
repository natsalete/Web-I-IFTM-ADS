<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>

<body>
    <?php
    /*$conexao = mysql_connect("localhost, "rooyyt", vertrigo");
    mysql_select_db("agenda", $conexao);*/

    $conexao = mysqli_connect("localhost", "root", "1234", "agenda");
    // localhost -> 127.0.0.1 - IP local
    // root: login e vertrigo: senha (XAMPP, sem senha)
    // agenda -> base de dados

    $dados = mysqli_query($conexao, "SELECT * FROM contato");
    //dados: ResultSet - matriz

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