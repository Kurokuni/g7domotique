<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>DomIsep</title>
    <link rel="stylesheet" href="http://localhost/g7domotique/CSS/design.css"/>
</head>
<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>
<body>
<br>
<br>
<br>
<div class="Conditions">
    <?php require('../Controleur/getteurAdmin.php');
    echo($textConditions)?>
</div>
</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>