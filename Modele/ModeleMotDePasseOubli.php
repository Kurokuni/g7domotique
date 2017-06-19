<?php
function MailDePasse($mail){
    require_once '../Else/connexionDB.php';
    $requ = $conn->prepare("SELECT pass_word FROM user WHERE email = '$mail'");
    $requ->execute();
    $data = $requ->fetch();
    $var1=$data['pass_word'];
    return $var1;
}
?>