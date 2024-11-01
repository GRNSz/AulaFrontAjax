<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./views/JavaScript/SistemaAjax.js"></script>
</head>
<body>
    <h1>Aula Sobre Front e Ajax</h1>
    <form action="./controllers/mainController.php?r=SiteController&action=enviar" method="POST">
        <input type="text" name="nome" id="nome" placeholder="Nome" required>
        <input type="text" name="email" id="email" placeholder="Email" required>
        <input type="text" name="telefone" id="telefone" placeholder="Telefone" required>
        <button type="button" class="login-btn" onclick="enviar()">Enviar</button>
</body>
</html>