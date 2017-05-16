<?php
function testConnexion ($pseudo, $mdp)
{
    require '../Else/connexionDB.php';
    $requ = $conn->prepare("SELECT IDUSER FROM user WHERE pseudo = $pseudo");
    $requ->execute();
    $requ2 = $conn->prepare("SELECT IDUSER FROM user WHERE pass_word = $mdp");
    $requ2->execute();
    echo '<br>';
    $data = $requ->fetch();
    $data2 = $requ2->fetch();
    $var1=$data['IDUSER'];
    $var2=$data2['IDUSER'];
    if ($var1 = $var2){
        return true;
    } else {
        return false;
    }
}