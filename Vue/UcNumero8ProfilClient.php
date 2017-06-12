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

<?php require('../CSS/Header_Connecte.php');?>
<br/>

<?php require('../Modele/modeleProfileClient.php');
$listeInfos=GetProfileClient($_GET['iduser']);
?>
<!-- require un getteur des infos -->

<form action="../Controleur/ControleurProfileClient.php?iduser=<?=$_GET['iduser']?>" method="post">
    <label for="prenom">prénom :</label>
    <input type="text" name="prenom" value="<?=$listeInfos['name']?>"/>
    <br/>
    <br/>

    <label for="nom">nom :</label>
    <input type="text" name="nom" value="<?=$listeInfos['lastname']?>"/>
    <br/>
    <br/>

    <label for="pseudo">pseudo :</label>
    <input type="text" name="pseudo" value="<?=$listeInfos['pseudo']?>"/>
    <br/>
    <br/>

    <label for="telephoneuser">numero de téléphone :</label>
    <input type="text" name="telephoneuser" value="<?=$listeInfos['phone_num']?>"/>
    <br/>
    <br/>

    <label for="mailuser">adresse mail :</label>
    <input type="text" name="mailuser" value="<?=$listeInfos['email']?>"/>
    <br/>
    <br/>


    <input type="submit" value="Envoyer"/>
</form>
<br/>
<br/>

<form id="motDePasse" action="../Controleur/ControleurProfileClient.php?iduser=<?=$_GET['iduser']?>" method="post">

    <p>changer votre mot de passe :</p>

    <label for="oldmdp">mot de passe actuel :</label>
    <input type="password" name="oldmdp"/>
    <br/>
    <br/>

    <label for="newmdp1">nouveau mot de passe :</label>
    <input type="password" name="newmdp1"/>
    <br/>
    <br/>

    <label for="newmdp2">confirmez votre mot de passe :</label>
    <input type="password" name="newmdp2"/>
    <br/>
    <br/>

    <input type="submit" value="Envoyer"/>

</form>




<?php require('../CSS/Footer.php');?>

<script type="text/javascript" src="../Else/changermdp.js"></script>
</body>
</html>