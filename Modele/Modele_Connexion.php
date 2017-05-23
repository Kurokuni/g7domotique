<?php
print_r($_POST);

function testConnexion ($pseudo, $mdp)
{
    require_once '../Else/connexionDB.php';
    $requ = $conn->prepare("SELECT IDUSER FROM user WHERE pseudo = '$pseudo'");
    $requ->execute();
    $data = $requ->fetch();
    $var1=$data['IDUSER'];
    $requ2 = $conn->prepare("SELECT IDUSER FROM user WHERE pass_word = '$mdp'");
    $requ2->execute();
    $data2 = $requ2->fetch();
    $var2=$data2['IDUSER'];
    echo ($var2);
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
    echo ($var3);
    return $var3;
}




?>