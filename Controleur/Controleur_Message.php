<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}

require ('../Modele/Modele_Message.php');
$message = $_POST['Message'];
$nom_message = $_COOKIE["nom"];
envoyermessage($nom_message,$message);

require ('../Vue/Vue_Message.php');
?>