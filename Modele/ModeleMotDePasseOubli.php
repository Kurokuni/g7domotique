<?php
function MailDeID($mail){
    require_once '../Else/connexionDB.php';
    $requ = $conn->prepare("SELECT IDUSER FROM user WHERE email = '$mail'");
    $requ->execute();
    $data = $requ->fetch();
    $var1=$data['pass_word'];
    return $var1;
}
?>