<?php
$Nom=$_POST['nom'];
$Prenom=$_POST['prenom'];
$Mail=$_POST['email'];
$Mdp=$_POST['mdp'];
$Mdp2=$_POST['mdp2'];
if ($Mdp != $Mdp2){
    $MdpDiff = true;
}


?>