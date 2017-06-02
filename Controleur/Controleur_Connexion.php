<?php
require ('../Modele/Modele_Connexion.php');
$Nom=$_POST['nom'];
$Mdp=$_POST['mdp'];
$_SESSION["nom"] = $Nom;

    $test = testConnexion($Nom, $Mdp);
    if ($test) {
        $_SESSION["role"] = role($Nom);

        switch ($_SESSION["role"]) {
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
?>
