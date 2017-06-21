<?php
require ('../Modele/ChangerMotDePasse.php');


$Mdp=md5($_POST['ancienmotdepasse']);
$test=Changementmdp( $Mdp);
if($test){
    $nouveaumdp = $_post["nom="];
} else {
    $erreur=true;
    require ('../Vue/Vue_Connexion.php');
}

