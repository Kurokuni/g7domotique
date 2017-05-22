<?php
require ('../Modele/Modele_Connexion.php');
$Nom=$_POST['nom'];
$Mdp=$_POST['mdp'];
$test=testConnexion($Nom, $Mdp);
if($test){
    if ($var3=1){
        require ('../Vue/VueUserConnecte.php');
    } elseif ($var3=2) {
        require('../Vue/VueAdminConnecte.php');
    }
} else {
$erreur=true;
require ('../Vue/Vue_Connexion.php');
}
?>