<?php

require('../Modele/modeleMaison.php');

$_SESSION["IDUSER"]=getIDuser($Nom);

$listeMaison=getAddress($_SESSION["IDUSER"]);

$IDAdresse1=adress1($_SESSION['IDUSER']);

require('../Vue/VueAccesMaison.php');









