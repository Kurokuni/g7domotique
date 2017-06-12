<?php
function envoyermessage($Nom,$Message){
    require_once '../Else/connexionDB.php';
    $req = $conn->prepare('INSERT INTO MessageInstant (Nom, Message) VALUES(:Nom, :Message)');
    $req->execute(array(
        'Nom' => $Nom,
        'Message' => $Message
    ));
}

function AfficherMessage(){
    require '../Else/connexionDB.php';
    $reponse = $conn->query('SELECT Nom, Message FROM MessageInstant ORDER BY IDMESSAGE DESC LIMIT 0, 10');
    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['Nom']) . '</strong> : ' . htmlspecialchars($donnees['Message']) . '</p>';
    }
    $reponse->closeCursor();
}