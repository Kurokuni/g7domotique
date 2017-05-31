<?php

/*require('../Modele/modeleMaison.php');*/

//$id=$_GET['id'];


$tabCapteurs=listeCapteurRoom(1);
echo('<br>');



require('../Vue/VueGeneralMaison.php');
