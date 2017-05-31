<?php

require('../Modele/modeleMaison.php');

$IDUSER=getIDuser($Nom);

$listeMaison=getAddress($IDUSER);


require('../Vue/VueAccesMaison.php');









