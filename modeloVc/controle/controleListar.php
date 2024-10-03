<?php
    $conexao = mysqli_connect("localhost", "root", "1234", "agenda");
    
    $dados = mysqli_query($conexao, "SELECT * FROM contato");
    
    while($usuario = mysqli_fetch_array($dados)){
        $contatos[] = $usuario["nome"];
    }
?>
