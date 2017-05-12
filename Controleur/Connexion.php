<?php
require ('../Modele/Connexion.php')
if(testConnexion($_POST['nom'], $_POST['mdp'])){
    require ('../Vue/Connexion.php');
} else {
$erreur=true;
require ('../Vue/Connexion.php');
}
?>