<?php
function ajout ($nom, $prenom, $mail, $phone, $mdp, $pseudo, $date)
{
    require_once '../Else/connexionDB.php';
    $req = $conn->prepare('INSERT INTO user(name, lastname, email, phone_num, pass_word, pseudo, birth_day, role) VALUES (:nom, :prenom, :mail, :phone, :mdp, :pseudo, :date, :role)');
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'mail' => $mail,
        'phone' => $phone,
        'mdp' => $mdp,
        'pseudo' => $pseudo,
        'date' => $date,
        'role' => 1,
    ));


    echo 'Inscription réussit';
}
?>
