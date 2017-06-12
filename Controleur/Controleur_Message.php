<?php
require ('../Modele/Modele_Message.php');
$Message = $_POST['Message'];
$Nom = 'aaa';
//$Nom = $_SESSION["nom"];
envoyermessage($Nom,$Message);

require ('../Vue/Vue_Message.php');
?>