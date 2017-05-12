<?php
require '../Else/connexionDB.php';



function testConnexion ($pseudo, $mdp)
{
    $requ = $conn->prepare("SELECT IDUSER FROM user WHERE pseudo = $pseudo");
    $requ->execute();
    $requ2 = $conn->prepare("SELECT IDUSER FROM user WHERE pass_word = $mdp");
    $requ2->execute();
    echo '<br>';
    $data = $requ->fetch();
    if ($requ = $requ2){
        return true;
    } else {
        return false;
    }
}


