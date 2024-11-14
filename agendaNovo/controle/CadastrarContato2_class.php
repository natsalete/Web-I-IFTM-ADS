<?php

	include_once("modelo/ContatoDAO_class.php");
	
	class CadastrarContato{
	
		public function __construct(){
			
			if(isset($_POST["enviar"]){
			//enviar é o botão de submit
					
					$c = new Contato();
					$c->setNome($_POST["nome"]);
					$c->setEmail($_POST["email"]);
					$c->setTelefone($_POST["telefone"]);
					$c->setId($_POST["id"]);
					
					$dao = new ContatoDao();
					$dao->alterar($c);
					
					$status = "Contato " . $c->getNome() 
					. " cadastrado com sucesso";
					
					$lista = $dao->listar();
					include_once("visao/listaContato.php");
					//para o funcionamento da visão da Listagem
					//de contatos
			   } else {
				//se entrar no else significa que nenhum 
				//formulário foi enviado, ou seja, a pessoa 
				//ainda não cadastrou o contato
				
				//ALTERAR -> pegar os dados do contato pelo 
				//$_GET["id"]
				
				//$c = $dao->exibir($id)
				
				include_once("visao/formCadastroContato.php");
			}
		}
	}
?>