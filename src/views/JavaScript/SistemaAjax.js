console.log("Início do Teste");

function enviar(){
        let urlSiteController = "http://localhost:8585/controllers/SiteController.php";
        const reqSiteController = new Request(urlSiteController);
        
        let promise = fetch(reqSiteController);
        promise.then(processaResposta);
    }

        function processaResposta(resp) {
            if (resp.status == 200) {
                resp.text().then(function (texto) {
                    console.log("Resposta: " + texto);
                });
            } else {
                console.log("Erro ao acessar o servidor: " + resp.status);

            }
    }
