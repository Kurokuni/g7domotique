<?php
require('../Modele/modeleProfileClient.php');
require ('../Modele/ModeleMotDePasseOubli.php');

$mail=$_POST['mailMDP'];
$id=MailDeID($mail);

if(SameNewPW($_POST['mmdpo'], $_POST['mmdpo2'])) {
    SetPWProfile(md5($_POST['mmdpo']), $id);
}