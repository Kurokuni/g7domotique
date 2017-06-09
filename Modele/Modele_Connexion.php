<?php
function testConnexion ($pseudo, $mdp)
{
    require_once '../Else/connexionDB.php';
    $requ = $conn->prepare("SELECT 'IDUSER' FROM user WHERE pseudo = '$pseudo'");
    $requ->execute();
    $data = $requ->fetch();
    $var1=$data['IDUSER'];
    $requ2 = $conn->prepare("SELECT 'IDUSER' FROM user WHERE pass_word = '$mdp'");
    $requ2->execute();
    $data2 = $requ2->fetch();
    $var2=$data2['IDUSER'];
    if ($var1 = $var2){
        return true;
    } else {
        return false;
    }
}
function role ($nom){
    require '../Else/connexionDB.php';
    $requ = $conn->prepare("SELECT IDUSER FROM user WHERE pseudo = '$nom'");
    $requ->execute();
    $data = $requ->fetch();
    $var=$data['IDUSER'];
    $requ3 = $conn->prepare("SELECT role FROM user WHERE IDUSER = $var");
    $requ3->execute();
    $data3 = $requ3->fetch();
    $var3=$data3['role'];
    return $var3;
}
// cette fonction renvoi l'adresse de la premiere maison de l'utilisateur X
function getHomePrincipale($pseudo){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("SELECT city,street,street_num FROM adress_home WHERE IDHOME=1 AND IDUSER=(SELECT IDUSER FROM user WHERE pseudo=:pseudo)");
    $requ1->bindParam(':pseudo',$pseudo,PDO::PARAM_STR,20);
    $requ1->execute();
    $tab=$requ1->fetch();
    return($tab);
}
?>