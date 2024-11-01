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
    <form action="./controllers/mainController.php?r=SiteController&action=index" method="GET">
        <label for="cep">Digite o CEP</label>
        <input type="text" name="CEP" id="cep">
        <input type="submit" onclick="enviar()">
</body>
</html>