


var mauvaisDoublePW = function (event) {
    //log
    if(document.getElementsByName("newmdp1")[0].value != document.getElementsByName("newmdp2")[0].value){  // Cas mot de passe different de l'ancien
        alert("erreur dans la réecriture du nouveau mot de passe");
        event.preventDefault();
        return;
    }
    return
}

document.getElementById("motDePasse").addEventListener("submit", mauvaisDoublePW, false); // ON ajoute un écouteur lorsqu'on clique sur envoyer




