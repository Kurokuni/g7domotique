<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../CSS/design.css" rel="stylesheet" type="text/css" media="all" />
    <meta charset="UTF-8">
    <title>Profil Client</title>
</head>
<body>
<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>

<?php require('../Modele/modeleProfileClient.php');
$listeInfos=GetProfileClient($_GET['iduser']);
?>
<br/><br/><br/><br/>

<h2>Votre profile:</h2>
<br/>

<form action="../Controleur/ControleurProfileClient.php?iduser=<?=$_GET['iduser']?>" method="post">
    <label for="prenom">prénom :</label>
    <input type="text" name="prenom" value="<?=$listeInfos['name']?>"/>
    <br/>
    <label for="nom">nom :</label>
    <input type="text" name="nom" value="<?=$listeInfos['lastname']?>"/>
    <br/>

    <label for="pseudo">pseudo :</label>
    <input type="text" name="pseudo" value="<?=$listeInfos['pseudo']?>"/>
    <br/>

    <label for="telephoneuser">numero de téléphone :</label>
    <input type="text" name="telephoneuser" value="<?=$listeInfos['phone_num']?>"/>
    <br/>

    <label for="mailuser">adresse mail :</label>
    <input type="text" name="mailuser" value="<?=$listeInfos['email']?>"/>
    <br/>


    <input type="submit" value="Envoyer"/>
</form>
<br/>

<form id="motDePasse" action="../Controleur/ControleurProfileClient.php?iduser=<?=$_GET['iduser']?>" method="post">

    <h2>Changer votre mot de passe :</h2>

    <label for="oldmdp">mot de passe actuel :</label>
    <input type="password" name="oldmdp"/>
    <br/>

    <label for="newmdp1">nouveau mot de passe :</label>
    <input type="password" name="newmdp1"/>
    <br/>

    <label for="newmdp2">confirmez votre mot de passe :</label>
    <input type="password" name="newmdp2"/>
    <br/>

    <input type="submit" value="Envoyer"/>

</form>
<br/><br/>

<a href="../Controleur/controleurMaison.php?pseudo=<?=$listeInfos['pseudo']?>"><strong>Retour</strong></a>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>




<script type="text/javascript" src="../Else/changermdp.js"></script>
</body>

<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>