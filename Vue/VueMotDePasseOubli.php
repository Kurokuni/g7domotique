<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../design.css" />
    <title>Récupération de mot de passe</title>
</head>
<body>
<?php
require ('../Header.php');
?>
<form action='../Controleur/ControleurMotDePasseOubli.php' method='post'>
    <fieldset>
        <legend>Veuiller entrer le e-mail de votre compte :</legend>
        E-mail: <input type="email" name='e-mail'><br>
        <input type='submit'>
    </fieldset>
</form>










<?php
require('../Footer.php');
?>
</body>
</html>