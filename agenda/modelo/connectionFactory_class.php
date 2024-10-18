<?php
    class ConnectionFactory {
        public $con = null;
        public $dbType = "mysql:";
        public $host = "localhost";
        public $user = "root";
        public $senha = "1234";
        public $db = "agenda";
        public $persistente = false;

        // Construtor, permite conexão persistente
        public function __construct($persistente = false){
            if($persistente != false){
                $this->persistente = true; // Corrige a atribuição
            }
        }

        // Método para obter conexão com o banco de dados
        public function getConnection(){
            try {
                // Corrige a string de conexão (adiciona ":")
                $this->con = new PDO(
                    $this->dbType."host=".$this->host.";dbname=".$this->db, 
                    $this->user, 
                    $this->senha, 
                    array(PDO::ATTR_PERSISTENT => $this->persistente, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
                );
                return $this->con;
            } 
            catch (PDOException $ex) {
                echo "Erro: " . $ex->getMessage();
            }
        }

        // Método para fechar a conexão
        public function close(){
            if($this->con != null){
                $this->con = null;
            }
        }
    }
?>
