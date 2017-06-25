<?php

require('../Modele/modeleCreerMaison.php');

$iduser=recupIDuser($_GET['pseudo']);
$Nom=$_GET['pseudo'];

if(isset($_POST['idMaison'])&& isset($_POST['street']) && isset($_POST['street_num']) && isset($_POST['ville']) && isset($_POST['zipcode']) && isset($_POST['country'])){
    insertIntoAdresse($_POST['idMaison'],$_POST['street_num'],$_POST['street'],$_POST['ville'],$_POST['zipcode'],$_POST['country'],$iduser);

require('controleurMaison.php');
}

















