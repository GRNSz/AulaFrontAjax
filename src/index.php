<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Ajax</title>
    <script>

        // Professor, kkkk, se você ver os commits dessa atividade vai ver quanto tempo fiquei quebrando a cabeça e estudando para tentar fazer um código bem feito...
        
        // Inicio um debbug para avisar que a atividade está iniciando.
        console.log("Iniciando Atividade...");


        // Inicia a função LoadContent para fazer a requisição Ajax do arquivo testeController.php.
        // Após, utilizo o método "Open" para iniciar a requisição utilizando o método GET.
        // Informo true no final para indicar que é uma requisição assíncrona.
        function loadContent() {

            // Declarando a váriavel responsável por fazer a requisição para o JS  com Ajax.
            var xhr = new XMLHttpRequest();
            xhr.open('GET', './controllers/testeController.php', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('teste').innerHTML = xhr.responseText;
                }
            };

            // O send é utilizado para enviar a requisição.
            xhr.send();

            // Aqui faço um debbug para avisar que a atividade está finalizando sem erros.
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