<?php

require('../Else/connexionDB.php');


/*On récupère le contenu des etages de la table adress_home*/

    $etage= $conn -> query('SELECT `etage_min`, `etage_max` FROM `adress_home` WHERE IDHOME=2'); /* Recupère les étage en fonction de l'identité de la maison*/
    $nbetage = $etage -> fetch();/* On recupere la donner de l'objet*/
    print_r($nbetage);/* Permet d'afficher les données de la requete*/
?>