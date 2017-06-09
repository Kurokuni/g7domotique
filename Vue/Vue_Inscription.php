<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
<header>

</header>
<form action='../Controleur/Controleur_Inscription.php' method="post">
    <label>Nom: <input type="text" name="nom"/></label><br/>
    <label>Prénom: <input type="text" name="prenom"/></label><br/>
    <label>Adresse e-mail: <input type="text" name="email"/></label><br/>
    <label>Numéro de téléphone: <input type="number" name="phone"/></label><br/>
    <label>Mot de passe: <input type="password" name="mdp"/></label><br/>
    <label>Confirmation du mot de passe: <input type="password" name="mdp2"/></label><br/>
    <label>Pseudo: <input type="text" name="pseudo"/></label><br/>
    <label>Date de naissance: <input type="date" name="date"/></label><br/>
    <input type="checkbox" name="cond" value="condit"> <a href="../Vue/ConditionDUtilisation.php">Condition générale d'utilisation</a> <br>
    <input type="submit" value="Inscription"/>
</form>
<?php
if (isset($erreur2)){
    echo "Veuillez accepter les condition générale d'utilisation";
}
if (isset($MdpDiff)){
echo 'Mot de passe different';
}
?>

<?php
require('../CSS/Footer.php');
?>
</body>
</html>