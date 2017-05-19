<?php

require('../Modele/ChoixAdresse.php');/* on recupere ce que l'on a demander dans le modèle */

$GLOBALS['street_num'] = $nbadresse[0]; // on stocke le numéro de l'adresse dans une variable globale accessible dans tous les fichiers
$GLOBALS['street'] = $nbadresse[1]; // idem avec la rue
$GLOBALS['city'] = $nbadresse[2]; // idem avec la ville
$GLOBALS['zipcode'] = $nbadresse[3]; // idem avec le code postale
$GLOBALS['country'] = $nbadresse[4]; // idem avec le pays



