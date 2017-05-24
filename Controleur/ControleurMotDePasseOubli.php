<?php
require ('../Modele/ModeleMotDePasseOubli.php.php');
$Mail=$_POST['mail'];
$Mdp = MailDePasse($Mail);
$Sujet = 'Récupération du mot de passe';
$Message = 'Voici votre mit de passe ' . $Mdp . 'Veuillez le noter quelque part.';


mail($Mail, $Sujet, $Message);
?>