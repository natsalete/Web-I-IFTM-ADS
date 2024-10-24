<?php
    include_once("modelo/ContatoDAO_class.php");
    class CadastrarContato{
        //Controle

        public function __construct(){

            if(isset($_POST["enviar"])){
                //formulário enviar foi enviado

                $c = new Contato();
                $c->setNome($_POST["nome"]);
                $c->setEmail($_POST["email"]);
                $c->setTelefone($_POST["telefone"]);

                $dao = new ContatoDAO();
                $dao->cadastrar($c);

                $status = "Cadastro do Contato " . $c->getNome() . " efetuarcom sucesso";

                $lista = $dao->listar();

                include_once("visao/listaContato.php");
            } else {
                include_once("visao/formCadastroContato.php");
            }
        }
    }
?>