<?php
function ajout ($nom, $prenom, $mail, $phone, $mdp, $pseudo, $date)
{
    require_once '../Else/connexionDB.php';
    $conn->exec('INSERT INTO user VALUES ($nom, $prenom, $mail, $phone, $mdp, $pseudo, $date, 1)');
    echo 'Inscription réussit';
}
?>
