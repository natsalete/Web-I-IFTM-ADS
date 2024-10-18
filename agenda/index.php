<?php
session_start();

//Inicia a sessão
//área de memória dentro do servidor
//carrinho de compras, seus dados de conexão
//qualquer variável que voce queira criar
//include_once("visao/topo.php");

include_once("controle/ListarContato_class.php");
$index = new ListarContato();

// atribuição de responsabilidade
// o controle sabe como exibir a lista de contatos
// include_once("visao/base.php")

?>