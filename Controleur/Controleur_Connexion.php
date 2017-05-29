<?php
require ('../Modele/Modele_Connexion.php');
$Nom=$_POST['nom'];
$Mdp=$_POST['mdp'];
$Condi=$_POST['cond'];

if ($Condi!=true){
    $erreur2 = true;
    require('../Vue/Vue_Connexion.php');
} else {
    $test = testConnexion($Nom, $Mdp);
    if ($test) {
        $role = role($Nom);
        switch ($role) {
            case "1":
                require('../Vue/VueUserConnecte.php');
                break;
            case "2":
                require('../Vue/VueAdminConnecte.php');
                break;
            default:
                require('../Vue/VueUserConnecte.php');
        }
    } else {
        $erreur = true;
        require('../Vue/Vue_Connexion.php');
    }
}
?>