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
<body>
<header>
    <?php include '../CSS/Header_Connecte.php';?>
</header>
<br/><br/><br/><br/>

<?php
if(!isset($pseudo) && !isset($Pseudo)) {
    $pseudo = $_GET['pseudo'];
}
if(isset($Pseudo)){
    $pseudo=$Pseudo;
}
?>

<p>Ajoutez un domicile pour pouvoir le gérer à distance :</p>

<form action="../Controleur/contoleurCreerMaison.php?pseudo=<?=$pseudo?>" method="post">
    <label for="idMaison">Numéro de votre maison :</label>
    <input type="number" name="idMaison" placeholder="ex: 1 pour la maison principale" cols="200"/>
    <br/>
    <br/>
    <label for="street">Rue :</label>
    <input type="text" name="street" placeholder="Rue"/>
    <br/>
    <br/>
    <label for="street_num">Numéro de rue :</label>
    <input type="number" name="street_num" placeholder="Numéro" />
    <br/>
    <br/>
    <label for="ville">Ville :</label>
    <input type="text" name="ville" placeholder="Ville" />
    <br/>
    <br/>
    <label for="zipcode">Code postal :</label>
    <input type="number" name="zipcode" placeholder="Code Postal"/>
    <br/>
    <br/>
    <label for="country">Pays :</label>
    <input type="text" name="country" placeholder="Pays"/>
    <br/>
    <br/>
    <input type="submit" value="Envoyer"/>
</form>

<br/><br/><br/><br/><br/>







<footer>
    <?php include '../CSS/Footer.php';?>
</footer>
</body>

</html>
