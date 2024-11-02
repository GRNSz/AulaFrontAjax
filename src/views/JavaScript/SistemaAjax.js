function loadDoc() {
    var puxa = xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            document.getElementById("campo1" ,"campo2", "campo3").innerHTML = this.responseText; 
        };
    }
    xhttp.open("GET", "./controllers/SiteController.php", true);
    xhttp.send();
}