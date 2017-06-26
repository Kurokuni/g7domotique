<?php
function envoyermessage($nom,$message){
    require_once '../Else/connexionDB.php';
    $req = $conn->prepare('INSERT INTO MessageInstant (nom, message) VALUES(:nom, :message)');
    $req->execute(array(
        'nom' => $nom,
        'message' => $message
    ));
}

function AfficherMessage(){
    require '../Else/connexionDB.php';
    $reponse = $conn->query('SELECT nom, message FROM MessageInstant ORDER BY IDMESSAGE DESC LIMIT 0, 10');
    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['nom']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
    }
    $reponse->closeCursor();
}