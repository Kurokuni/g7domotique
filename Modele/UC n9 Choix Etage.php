<?php

require('../Else/connexionDB.php');


/*On récupère le contenu de la table etage*/

    $etage= $conn -> query('SELECT `etage_min`, `etage_max` FROM `adress_home` WHERE IDHOME=2'); /* Recupère les étage en fonction de l'identité de la maison*/
    $nbetage = $etage -> fetch();//recuperer la donner de l'objet
    print_r($nbetage);
?>