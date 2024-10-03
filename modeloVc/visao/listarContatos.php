<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>

<body>
    <?php
        include_once "../controle/controleListar.php";
    ?>
    <h1>Lista de Contatos</h1>
    <ul>
        <?php
            foreach($contatos as $i=>$nome){
                $i++;
                echo "<li> Contato n° $i : $nome </li>";
            
            }
        ?>
    </ul>
</body>
</html>