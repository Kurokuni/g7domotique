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
    <title>Récupération de mot de passe</title>
</head>
<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>
<body>
<?php
require ('../CSS/Header_Deconnecte.php');
?>
<div style="margin-top: 10%" class="MdpOublie">
<form action='../Controleur/ControleurMotDePasseOubli.php' method='post'>
    <fieldset>
        <legend>Veuiller entrer le e-mail de votre compte :</legend>
        E-mail: <input placeholder="Adresse email" type="email" name='e-mail'><br>
        <input type='submit' value="Soumettre">
    </fieldset>
</form>
</div>










<?php
require('../CSS/Footer.php');
?>
</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>