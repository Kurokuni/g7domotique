<?php

require('../Else/connexionDB.php');


/*On récupère le contenu des adresses d'un même utilisateur*/

$adresse= $conn -> query('SELECT `street_num`, `street`, `city`,`zipcode`,`country`  FROM `adress_home` WHERE IDUSER=4'); /* Recupère les données des adresses de l'identité d'un utilisateur*/
$nbadresse = $adresse -> fetchAll();/* On recupere la donner de l'objet*/



