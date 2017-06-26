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
    <link rel="stylesheet" href="http://localhost/g7domotique/CSS/design.css" />
    <style>
        img {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <header  class="header"
        <a align="center" href="http://localhost/g7domotique/Vue/Accueil.php"> <img src="http://localhost/g7domotique/Images/Logo.png" style="width:5%" alt="Logo DomIsep"/> </a>
        <a align="center" href="http://localhost/g7domotique/Vue/Accueil.php">Votre maison connectée partout</a>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="http://localhost/g7domotique/Vue/ProfilClient.php"> Profile </a>
            <a href="http://localhost/g7domotique/Vue/Vue_Message.php"> Discussion </a>
            <a href="http://localhost/g7domotique/Vue/Vue-Deconnexion.php"> Deconnexion</a>
        </div>
    </div>

    <span style="float:left" style="font-size:15px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <script type="text/javascript" src="../Else/SideBar.js"></script>
    </header>

</body>
</html>


