<?php

require('../Modele/modeleMaison.php');

if(!isset($Nom)){
    $Nom=$_GET['pseudo'];
    echo($Nom);
}

$adress=getHomePrincipale($Nom);

$IDUSER=getIDuser($Nom);

$listeMaison=getAddress($IDUSER);

$IDAdresse1=adress1($IDUSER);

require('../Vue/VueAccesMaison.php');









