<?php

class SiteController
{
    public function handleFormSubmission()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $campo1 = isset($_POST['campo1']) ? htmlspecialchars($_POST['campo1']) : '';
            $campo2 = isset($_POST['campo2']) ? htmlspecialchars($_POST['campo2']) : '';
            $campo3 = isset($_POST['campo3']) ? htmlspecialchars($_POST['campo3']) : '';

            echo "<h1>Dados Recebidos</h1>";
            echo "<p>Campo 1: $campo1</p>";
            echo "<p>Campo 2: $campo2</p>";
            echo "<p>Campo 3: $campo3</p>";
        } else {
            echo "<h1>Erro: Método de requisição inválido.</h1>";
        }
    }
}

// Cria uma instância do controlador e chama o método de tratamento do formulário
$controller = new SiteController();
$controller->handleFormSubmission();
?>