<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="ProfilClient.css" rel="stylesheet" type="text/css" media="all" />
    <meta charset="UTF-8">
    <title>Profil Client</title>
</head>
<body>

<br/>
<br/>
<br/>
<br/>
<br/>
<a href="ChangerMotDePasse.php">Changer le mot de passe</a>

<br/>
<br/>
<br/>
<br/>
<br/>
<a href="ChangerPhotoDeProfil.php">Changer photo de profil</a>

<br/>
<br/>
<br/>
<br/>
<br/>
<a>Dèsactiver mon compte</a>



</body>
</html>