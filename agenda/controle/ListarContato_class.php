<?php
    include_once("modelo/ContatoDAO_class.php");

    class ListarContato{
        public function __construct()
        {
            $dao = new contatoDAO();
            $lista = $dao->listar();

            include_once("visao/listaContato.php");
        }
    }
?>