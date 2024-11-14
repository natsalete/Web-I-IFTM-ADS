<?php
session_start();
    if(isset($_GET["fun"])){
        $fun = $_GET["fun"];

        if($fun == "cadastrar"){
            include_once("controle/CadastrarContato_class.php");
            $pag = new CadastrarContato();
        } else {
            include_once("controle/ListarContato_class.php");
            $pag = new ListarContato();
        }
    }else {
        include_once("controle/ListarContato_class.php");
        $pag = new ListarContato();
    }
    
?>