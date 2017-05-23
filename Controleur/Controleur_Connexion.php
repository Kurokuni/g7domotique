<?php
require ('../Modele/Modele_Connexion.php');
$Nom=$_POST['nom'];
$Mdp=$_POST['mdp'];
$test=testConnexion($Nom, $Mdp);
if($test){
    $role = role($Nom);
    echo ($role);
    switch ($role){
        case "1":
            require('../Vue/VueUserConnecte.php');
            break;
        case "2":
            require ('../Vue/VueAdminConnecte.php');
            break;
        default:
            require('../Vue/VueUserConnecte.php');
    }
} else {
$erreur=true;
require ('../Vue/Vue_Connexion.php');
}
?>