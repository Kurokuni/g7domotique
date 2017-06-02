<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../design.css" />
    <title>Connexion</title>
</head>
<body>
<?php
require('../Header.php');
?>
<form action='../Controleur/Controleur_Connexion.php' method='post'>
    Nom: <input type="text" name='nom'><br>
    Mot de passe: <input type="password" name='mdp'><br>
    <input type='submit'>
</form>
<?php
if (isset($erreur)){
    echo 'Nom de compte ou mot de passe incorrect!';
}
?>
<br>
<a href="Vue_Inscription.php">Crée un compte.</a>
<a href="VueMotDePasseOublier.php">Mot de passe oublié !</a>
<!-- sauts de ligne a enlever si possible en modifiant le css du footer -->
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
require('../Footer.php');
?>
</body>
</html>