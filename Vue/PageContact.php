
<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>


<html lang="fr">
<head>
    <link href="../CSS/design.css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <title>CONTACT</title>
</head>

<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>

<body>



    <?php require('../Controleur/getteurAdmin.php') ?>
    <br/>
    <br/>
    <br/>
    <div class="PageContact">

    <p align="center">
        Mail : <?php print($textMail) ?>
    </p>

    <p align="center">
        Téléphone  : +33<?php print($textNumero) ?>
    </p>
<br>
        <div align= "center" class="adresse">
    Adresse : <?php print($textAdresse) ?>
    <p align="center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d21009.938298449604!2d2.2839214176992626!3d48.834517024233875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d48.824529!2d2.2798536!4m5!1s0x47e671ce3fa0c01f%3A0x9bd1ac22c478d56e!2sISEP+28+Rue+Notre+Dame+des+Champs!3m2!1d48.8453879!2d2.3281109!5e0!3m2!1sfr!2sfr!4v1496223176430" width="400" height="300" frameborder="0" style="border: 12em;" allowfullscreen></iframe>
    </p>
    <br/>
    </div>



<!-- sauts de ligne a enlever si possible en modifiant le css du footer -->
<br/><br/><br/><br/><br/><br/><br/><br/><br/>


</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>


