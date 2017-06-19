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
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>

<div style="margin-top: 8%" class="VueInscription">
<form action='../Controleur/Controleur_Inscription.php' method="post">
    <label>Nom: <input type="text" name="nom" placeholder="Nom"/></label>
    <label>Prénom: <input type="text" name="prenom" placeholder="Prénom"/></label><br/>
    <label>Adresse e-mail: <input type="text" name="email" placeholder="Email"/></label><br/>
    <label>Numéro de téléphone: <input type="number" name="phone" placeholder="Numéro de téléphone"/></label><br/>
    <label>Mot de passe: <input type="password" name="mdp" placeholder="Mot de passe"/></label><br/>
    <label>Confirmation du mot de passe: <input type="password" name="mdp2" placeholder="Confirmation du mot de passe"/></label><br/>
    <label>Pseudo: <input type="text" name="pseudo" placeholder="Pseudo"/></label><br/>
    <label>Date de naissance: <input type="date" name="date" placeholder="JJ/MM/YYYY"/></label><br/>
    <input type="checkbox" name="cond" value="condit"> <a href="TextsModifiables.php">J'accepte les conditions générales d'utilisation</a> <br>
    <input type="submit" value="S'inscrire"/>
</form>
</div>
<?php
if (isset($erreur2)){
    echo "Veuillez accepter les conditions générales d'utilisation";
}
if (isset($MdpDiff)){
echo 'Mot de passe different';
}
?>

</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>