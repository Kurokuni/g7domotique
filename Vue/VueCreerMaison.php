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
    <?php include '../CSS/Header_Deconnecte.php';?>
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

<p>Ajoutez un domicile pour pouvoir le gerer a distance :</p>

<form action="../Controleur/contoleurCreerMaison.php?pseudo=<?=$pseudo?>" method="post">
    <label for="idMaison">Numero de votre mison :</label>
    <input type="number" name="idMaison" placeholder="ex: 1 pour la maison principale" cols="200"/>
    <br/>
    <br/>
    <label for="street">Rue :</label>
    <input type="text" name="street"/>
    <br/>
    <br/>
    <label for="street_num">Numero de rue :</label>
    <input type="number" name="street_num" />
    <br/>
    <br/>
    <label for="ville">Ville :</label>
    <input type="text" name="ville" />
    <br/>
    <br/>
    <label for="zipcode">Code postal :</label>
    <input type="number" name="zipcode" />
    <br/>
    <br/>
    <label for="country">Pays :</label>
    <input type="text" name="country" />
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
