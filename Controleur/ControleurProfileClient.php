<?php

require('../Modele/modeleProfileClient.php');

$IDUSER=$_GET['iduser'];

// setteurs des informations editables du client

if(isset($_POST['prenom'])){
    SetNomProfile($_POST['prenom'],$IDUSER);
}

if(isset($_POST['nom'])){
    SetLastNameProfile($_POST['nom'],$IDUSER);
}

if(isset($_POST['pseudo'])){
    SetPseudoProfile($_POST['pseudo'],$IDUSER);
}

if(isset($_POST['telephoneuser'])){
    SetNumeroProfile($_POST['telephoneuser'],$IDUSER);
}

if(isset($_POST['mailuser'])){
    SetMailProfile($_POST['mailuser'],$IDUSER);
}


// Changement du mot de passe

if(isset($_POST['oldmdp'])) {
    if (checkingOldPW($_POST['oldmdp'], $IDUSER) && SameNewPW($_POST['newmdp1'], $_POST['newmdp2'])) {
        SetPWProfile(md5($_POST['newmdp1']), $IDUSER);
    }
}

$listeinfos=GetProfileClient($IDUSER);

$Nom=$listeinfos['pseudo'];
require('controleurMaison.php');

