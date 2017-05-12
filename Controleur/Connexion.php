<?php
require ('../Modele/Connexion.php')
if(testConnexion($_POST['nom'], $_POST['mdp'])){
    require ('url');
} else {

}
?>