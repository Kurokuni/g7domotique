<?php

require ('../Modele/Modele_Connexion.php');

if(isset($_COOKIE['test'])&&$_COOKIE['test']==1){
    $_SESSION['nom']=$_COOKIE['nom'];
}
else {
    $_SESSION['nom']=$_POST['nom'];
}
$_SESSION['mdp']=$_POST['mdp'];
$Nom=$_SESSION['nom'];
$Mdp=$_SESSION['mdp'];
$test = testConnexion($Nom, $Mdp);
    if ($test) {
        $_SESSION["role"] = role($Nom);
        if(isset($_POST['4Ever'])){
            setcookie('test', 1, time() + 3600 * 24 * 2, '/', 'localhost', false, false);
            setcookie('nom', $_POST['nom'], time() + 3600 * 24 * 2, '/', 'localhost', false, true);
            setcookie('role',role($Nom),time()+3600*24*2,'/','localhost',false,true);
        }
        if(isset($_COOKIE['test'])&&$_COOKIE['test']==1){
            $_SESSION["nom"] = $_COOKIE['nom'];
            $_SESSION["role"] = $_COOKIE['role'];
        }
        $role=$_SESSION['role'];
        switch ($role) {
            case "1":
                $adress=getHomePrincipale($Nom);
                require ('../Controleur/controleurMaison.php');
                break;
            case "2":
                require ('../Vue/VueAdminConnecte.php');
                break;
            default:
                require ('../Vue/Accueil.php');
        }
    } else {
        $erreur = true;
        require('../Vue/Accueil.php');
    }
?>