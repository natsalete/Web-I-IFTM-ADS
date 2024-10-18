<?php
    class contato{
        //classe entidade
        private $id;
        private $nome;
        private $email;
        private $telefone;
        private $foto;

        public function __construct(){}   
        
        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setEmail($email){
            $this->email = $email;
        }
       
        public function getEmail(){
            return $this->email;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
       
        public function getTelefone(){
            return $this->telefone;
        }
        public function setFoto($foto){
            $this->foto = $foto;
        }
       
        public function getFoto(){
            return $this->foto;
        }
        
    }
?>