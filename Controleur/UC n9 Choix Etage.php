<?php

require('../Modele/UC n9 Choix Etage.php');/* on recupere ce que l'on a demander dans le modèle */


for ($compteur = 0; $compteur < $nbetage[1]; $compteur++)
{
    require('../Vue/UC n9 Choix Etage.php');/* on recupere ce que l'on a demander dans la vue */
}
?>
