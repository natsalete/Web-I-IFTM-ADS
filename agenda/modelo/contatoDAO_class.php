<?php
    include_once("ConnectionFactory_class.php");//PDO
    include_once("Contato_class.php");//Entidades

    class ContatoDAO{
        //DAO - Data Access Object
        //CRUD - Creat, Read, Update e Delete
        //operações básicas de banco de dados

        public $con = null; // obj recebe conexão

        public function __construct(){
            $conF = new ConnectionFactory();
            $this->con = $conF->getConnection();
        }

        //cadastrar
        public function cadastrar($cont){
            try{
                $stmt = $this->con->prepare(
                "INSERT INTO contato(nome, email, telefone) VALUES (:nome, :email, :telefone)");
                
                //:nome - é uma âncora 
                //ligamos as âncoras aos valores de Contato
                $stmt->bindValue(":nome", $cont->getNome());
                $stmt->bindValue(":email", $cont->getEmail());
                $stmt->bindValue(":telefone", $cont->getTelefone());
                
                $stmt->execute(); // execução do SQL

                /*$this->con->close();
                $this->con =null;*/
                    
            }catch(PDOException $ex){
                echo "Erro: " . $ex->getMessage();
            }
        }

        public function listar($query = null){
            //se não recebe parametro (ou seja, uma consulta personalizada)
            // $query recebe null
            try{
                if($query == null){
                    $dados = $this->con->query("SELECT * FROM contato");
                    //dataset (conjunto de dados) com todos os dados
                    //query() é função PDO, executa SQL
                }else {
                    $dados = $this->con->query($query);
                    //se listar recebe parametro este será uma SQL
                    //SQL especifica
                }
                $lista = array(); // crio chamado função array()

                foreach($dados as $linha){
                    //percorre linha a linha de dados e coloca cada registro
                    // na variável linha (que é um vetor)
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
    }

?>