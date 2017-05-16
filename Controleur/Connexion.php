<?php
require ('../Modele/Connexion.php');
$Nom=$_POST['nom'];
$Mdp=$_POST['mdp'];
$test=testConnexion($Nom, $Mdp);
if($test){
    require ('../Vue/Connexion.php');
} else {
$erreur=true;
require ('../Vue/Connexion.php');
}
?>