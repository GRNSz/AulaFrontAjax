<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script>

        console.log("Início do Teste");
        let urlSiteController = "http://localhost:8080/controllers/siteController.php";
        const reqSiteController = new Request(urlSiteController);
        
        function processaResposta(resp) {
            resp.text().then(function(text) {
                console.log(document.getElementById("resposta").innerHTML = text);
            });
        }

        console.log("Aguarde...")
        let = fetch(reqSiteController).then(processaResposta);
        console.log("Aguarde...")
        let = fetch(reqSiteController).then(processaResposta);
        console.log("Aguarde...")
        let = fetch(reqSiteController).then(processaResposta);
        console.log("Aguarde...")
        let = fetch(reqSiteController).then(processaResposta);
        console.log("Aguarde...")
        let = fetch(reqSiteController).then(processaResposta);
       // alert(promise);
        console.log("Fim do Teste");
    </script>

</head>
<body>
    <h1>Aula Sobre Front e Ajax</h1>
    <span id="resposta"></span>
</body>
</html>