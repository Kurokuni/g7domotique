<?php
$Nom=$_POST['nom'];
$Prenom=$_POST['prenom'];
$Mail=$_POST['email'];
$Phone=$_POST['phone'];
$Mdp=$_POST['mdp'];
$Mdp2=$_POST['mdp2'];
$Pseudo=$_POST['pseudo'];
$Date=$_POST['date'];
if ($Mdp != $Mdp2){
    $MdpDiff = true;
    require ('../Vue/Vue_Inscription.php');
}
else {
    require ('../Modele/Modele_Inscription.php');
    ajout($Nom, $Prenom, $Mail, $Phone, $Mdp, $Pseudo, $Date);
    require ('../Vue/');
}

?>