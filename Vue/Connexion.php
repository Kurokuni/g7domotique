<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<header>

</header>
<form action='../Controleur/Connexion.php' method='post'>
    Nom: <input type="text" name='nom'><br>
    Mot de passe: <input type="text" name='mdp'><br>
    <input type='submit'>
</form>
<?php
if (isset($erreur)){
    echo 'Nom de compte ou mot de passe incorrect!';
}
?>
<a href="url">Crée un compte.</a>
<a href="url">Mot de passe oublié !</a>
</body>
</html>