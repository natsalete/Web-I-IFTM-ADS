<?php
session_start();
include_once("visao/cabecalho.php");
	if(isset($_GET["fun"])){
		$fun = $_GET["fun"];
		
		if($fun == "cadastrar"){
			
			include_once("controle/CadastrarContato_class.php");
			$pag = new CadastrarContato();
			
		} elseif($fun == "alterar"){
			include_once("controle/AlterarContato_class.php");
			$pag = new AlterarContato();
			
		} elseif($fun == "excluir"){
			
			include_once("controle/ExcluirContato_class.php");//op == sim
			$pag = new ExcluirContato();
			
		} elseif($fun == "listar"){
			include_once("controle/ListarContato_class.php");
			$pag = new ListarContato();
			
		}  elseif($fun == "exibir") {
			include_once("controle/ExibirContato_class.php");
			$pag = new ExibirContato();
			
		} else {
			include_once("controle/ListarContato_class.php");
			$pag = new ListarContato();			
		}
			
	} else {
		include_once("controle/ListarContato_class.php");
		$pag = new ListarContato();
	}
	
include_once("visao/rodape.php");

?>
