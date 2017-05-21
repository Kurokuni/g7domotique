<?php
print_r($_POST);
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

?>