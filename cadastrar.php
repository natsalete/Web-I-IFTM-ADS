<?php
    $nome = $_GET["nome"];
    $tutor = $_GET["tutor"];
    
    // Todas as variáveis do PHO utilizamo $
    //_GET - array que foi automaticamente criado 
    // method for POST -> _POST

    echo "Nome: " . $nome . " Tutor: " . $tutor . "<br/><br/>";

    //ou
    echo "Nome: $nome  e Tutor: $tutor";
    // echo é o print mais comum do PHP
    // concatenação é ponto (.)

    $con = mysqli_connect("localhost", "root", "1234", "veterinaria");

    $sql = "INSERT INTO animal (nome, tutor) VALUES ('$nome', '$tutor')";

    $resultado = mysqli_query($con, $sql);
    
?>