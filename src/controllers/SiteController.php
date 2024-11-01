<?php

    class SiteController {
        public function enviar($_POST) {

            $nome = array ("Nome: " . $_POST['nome']) . "<br>";
            $email = array ("Email: " . $_POST['email']) . "<br>";
            $telefone = array ("Telefone: " . $_POST['telefone']) . "<br>";

            # Array para armazenar dados para conferência
            $dados = array($nome, $email, $telefone);
    
            if ($dados !== null) {
                echo "Digite os dados solicitados por favor!";
            } else {
                header ("Location: ./views/HTML/Resposta.html");
        }
    }
        

        public function index() {
            echo "Index";
        }
    }
?>
