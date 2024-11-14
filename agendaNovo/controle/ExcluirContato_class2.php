<?php

	include_once("modelo/ContatoDAO_class.php");
	
	class ExcluirContato{
	
		public function __construct(){
			
			if(isset($_GET["conf"]){
				if($_GET["conf"] == "sim"){
			//enviar é o botão de submit
					
					$dao = new ContatoDAO();
									
					$c = new Contato();
					$c = $dao->exibir($_GET["id"]); //encapsulando o id dentro de um obj Contato

					$dao->excluir($c);
					
					$status = "Contato " . $c->getNome() . " excluído com sucesso";
					
					$lista = $dao->listar();
					include_once("visao/listaContato.php");
					//para o funcionamento da visão da Listagem de contatos
				}
			} else {
				//encaminhar para a página de confirmação de exclusão
				
				$dao = new ContatoDAO();
							
				$c = $dao->exibir($_GET["id"]);
				
				include_once("visao/pagAutorizaExcluir.php");
			}
		}
	}
?>