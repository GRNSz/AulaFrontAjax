<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Ajax</title>
    <script>

        // Professor, kkkk, se você ver os commits dessa atividade vai ver quanto tempo fiquei quebrando a cabeça e estudando para tentar fazer um código bem feito...
        
        console.log("Iniciando Atividade...");

        function loadContent() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', './controllers/testeController.php', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('teste').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
            console.log("Finalizando Atividade...");
        }
    </script>
</head>
<body>
    <h1>Aula JS com Ajax</h1>
    <button onclick="loadContent()">Faça um Teste</button>
    <div id="teste"></div>
</body>
</html>