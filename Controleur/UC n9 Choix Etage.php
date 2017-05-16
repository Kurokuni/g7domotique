<?php

require('../Modele/UC n9 Choix Etage.php');/* on recupere ce que l'on a demander dans le modèle */

$GLOBALS['min'] = $nbetage[0]; // on stocke l'étage minimum dans une variable globale accessible dans tous les fichiers
$GLOBALS['max'] = $nbetage[1]; // idem avec l'étage max


require('../Vue/UC n9 Choix Etage.php'); // On fait appel à la vue de choix d'étage.
