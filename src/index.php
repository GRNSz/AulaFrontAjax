<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
<body>
    <h1>Formulário de Preenchimento</h1>
    <form action="process.php" method="post">
        <label for="campo1">Campo 1:</label>
        <input type="text" id="campo1" name="campo1" required><br><br>
        
        <label for="campo2">Campo 2:</label>
        <input type="text" id="campo2" name="campo2" required><br><br>
        
        <label for="campo3">Campo 3:</label>
        <input type="text" id="campo3" name="campo3" required><br><br>
        
        <button type="button" onclick="loadDoc()">Enviar</button>

        <script src="./views/JavaScript/SistemaAjax.js"></script>
</head>
    </form>
</body>
</html>