<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/design.css" />
    <title>Message</title>
    <meta http-equiv="refresh" content="5; URL=http://localhost/g7domotique/Vue/Vue_Message.php">
</head>
<header>
    <?php include '../CSS/Header_Connecte.php';?>
</header>
<body class="Message">

<form action='../Controleur/Controleur_Message.php' method="post">
    <label><input type="text" name="Message" placeholder="Message"/></label>
    <input type="submit" value="Envoyer"/>
</form>


<?php
require_once ('../Modele/Modele_Message.php');
affichermessage();
?>
</body>
<footer>
    <?php include '../CSS/Footer.php';?>
</footer>
</html>