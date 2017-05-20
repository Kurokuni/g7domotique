<?php
require ('../Modele/Modele_Connexion.php');

$Nom=$_POST['nom'];
$Mdp=$_POST['mdp'];
$test=testConnexion($Nom, $Mdp);
if($test){
    require ('../Vue/');
} else {
$erreur=true;
require ('../Vue/Vue_Connexion.php');
}
?>