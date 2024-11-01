console.log("Início do Teste");

function enviar(){
        let urlSiteController = "http://localhost:8585/controllers/siteController.php";
        const reqSiteController = new Request(urlSiteController);
        
        let promise = fetch(reqSiteController, {});
    }

        function processaResposta(resp) {
            resp.text().then(function(text) {
                console.log(document.getElementById("nome", "telefone", "email").innerHTML = text);
            });
    }
