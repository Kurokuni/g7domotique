<?php
require('../Modele/modeleProfileClient.php');
require ('../Modele/ModeleMotDePasseOubli.php');

$mail=$_POST['mailMDP'];
$id=MailDeID($mail);

if(SameNewPW(md5($_POST['mmdpo']), md5($_POST['mmdpo2']))) {
    SetPWProfile(md5($_POST['mmdpo']), $id);
}

require ('../Vue/Accueil.php');

?>