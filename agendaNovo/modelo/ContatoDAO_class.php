<?php
	include_once("ConnectionFactory_class.php");//PDO
	include_once("Contato_class.php"); //entidade
	
	class ContatoDAO{
	//DAO - Data Access Object	
	//CRUD - Creat, Read, Update e Delete
	//operações básicas de banco de dados
	
		public $con = null; //obj recebe conexão
		
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
	
		//cadastrar
		public function cadastrar($cont){
			try{
				$stmt = $this->con->prepare(
				"INSERT INTO contato(nome, email, telefone, foto)
				VALUES (:nome, :email, :telefone, :foto)");
				//:nome - é uma âncora e será ligado pelo bindValue
				//SQL injection
				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":nome", $cont->getNome());
				$stmt->bindValue(":email", $cont->getEmail());
				$stmt->bindValue(":telefone", $cont->getTelefone());
				$stmt->bindValue(":foto", "teste");
				
				$stmt->execute(); //execução do SQL	
				/*$this->con->close();
				$this->con = null;*/	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		//alterar
		public function alterar($cont){
			try{
				$stmt = $this->con->prepare(
				"UPDATE contato SET nome=:nome, 
				email = :email, telefone=:telefone, foto=:foto WHERE
				id=:id");
				
				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":nome", $cont->getNome());
				$stmt->bindValue(":email", $cont->getEmail());
				$stmt->bindValue(":telefone", $cont->getTelefone());
				$stmt->bindValue(":foto", $cont->getFoto());
				$stmt->bindValue(":id", $cont->getId());
				
				$this->con->beginTransaction();
			    $stmt->execute(); //execução do SQL	
				$this->con->commit(); 
				/*$this->con->close();
				$this->con = null;*/	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		//excluir
		public function excluir($cont){
			try{
				$num = $this->con->exec("DELETE FROM contato WHERE id = " . $cont->getId());
				//numero de linhas afetadas pelo comando
				
				if($num >= 1){
					return 1;
				} else {
					return 0;
				}
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
	
		//listar
		public function listar($query = null){		
			//se não recebe parâmetro (ou seja, uma consulto personalizada)
			//$query recebe nulo
			try{
				if($query == null){
					$dados = $this->con->query("SELECT * FROM contato");
					//dataset (conjunto de dados) com todos os dados
					//query() é função PDO, executa SQL
				} else {
					$dados = $this->con->query($query);
					//se listar receber parâmetro este será uma SQL 
					//SQL específica
				}
				$lista = array(); //crio chamando função array()

				/*for($i = 0; $i<$dados.lenght; $i++){
					$c->setNome($dados[i][1]);
				}*/

				foreach($dados as $linha){
				//percorre linha a linha de dados e coloca cada registro
				//na variável linha (que é um vetor)
					$c = new Contato();
					$c->setId($linha["id"]);
					$c->setNome($linha["nome"]);
					$c->setTelefone($linha["telefone"]);
					$c->setEmail($linha["email"]);					
					$lista[] = $c;
				}
				return $lista;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		//exibir 
		public function exibir($id){			
			try{				
				$lista = $this->con->query("SELECT * FROM contato WHERE id = " . $id);
				
				/*$this->con->close();
				$this->con = null;*/
				
				$dado = $lista->fetchAll(PDO::FETCH_ASSOC);
				
				$c = new Contato();
				$c->setId($dado[0]["id"]);
				$c->setNome($dado[0]["nome"]);
				$c->setTelefone($dado[0]["telefone"]);
				$c->setEmail($dado[0]["email"]);
				$c->setFoto($dado[0]["foto"]);
				
				return $c;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
	}


?>