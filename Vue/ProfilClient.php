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
<!-- require un getteur des infos -->
<div class="ProfileClient">
<form action="../Controleur/ControleurProfileClient.php?iduser=<?=$_GET['iduser']?>" method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" value="<?=$listeInfos['name']?>"/>
    <br/>
    <br/>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" value="<?=$listeInfos['lastname']?>"/>
    <br/>
    <br/>

    <label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" value="<?=$listeInfos['pseudo']?>"/>
    <br/>
    <br/>

    <label for="telephoneuser">Numero de téléphone :</label>
    <input type="text" name="telephoneuser" value="<?=$listeInfos['phone_num']?>"/>
    <br/>
    <br/>

    <label for="mailuser">Adresse mail :</label>
    <input type="text" name="mailuser" value="<?=$listeInfos['email']?>"/>
    <br/>
    <br/>


    <input type="submit" value="Envoyer"/>
</form>
<br/>
<br/>

<form id="motDePasse" action="../Controleur/ControleurProfileClient.php?iduser=<?=$_GET['iduser']?>" method="post">

    <p><strong><u>Changer votre mot de passe :</u></strong></p>

    <label for="oldmdp">Mot de passe actuel :</label>
    <input type="password" placeholder="Mot de passe actuel" name="oldmdp"/>
    <br/>
    <br/>

    <label for="newmdp1">Nouveau mot de passe :</label>
    <input type="password" placeholder="Nouveau mot de passe" name="newmdp1"/>
    <br/>
    <br/>

    <label for="newmdp2">Confirmez votre mot de passe :</label>
    <input type="password" placeholder="Confirmer le mot de passe" name="newmdp2"/>
    <br/>
    <br/>

    <input type="submit" value="Envoyer"/>

</form>





<script type="text/javascript" src="../Else/changermdp.js"></script>
</div>
</body>
<br/><br/><br/><br/><br/><br/>

<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>