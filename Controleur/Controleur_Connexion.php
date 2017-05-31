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
                $Nom=$_POST['nom'];
                $Mdp=$_POST['mdp'];
                $adress=getHomePrincipale($Nom);
                require ('../Controleur/controleurMaison.php');
                break;
            case "2":
                $Nom=$_POST['nom'];
                $Mdp=$_POST['mdp'];
                $adress=getHomePrincipale($Nom);
                require ('../Controleur/controleurMaison.php');
                break;
            default:
                $Nom=$_POST['nom'];
                $Mdp=$_POST['mdp'];
                $adress=getHomePrincipale($Nom);
                require ('../Controleur/controleurMaison.php');
        }
    } else {
        $erreur = true;
        require('../Vue/Vue_Connexion.php');
    }
}
?>
