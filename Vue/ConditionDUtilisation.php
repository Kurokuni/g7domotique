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
    <link rel="stylesheet" href="../CSS/design.css" />
    <title>Modifier des paramètres</title>
</head>
<header>
    <?php require('../CSS/Header_Deconnecte.php');?>
</header>
<body class="ConditionUtilisation">
<?php require('../Modele/ModeleAdministrateur.php'); ?>

<form action="../Controleur/ControleurAdministrateur.php" method="get">

    <label for="QuiSommesNous">Modifier le texte de présentation de l'entreprise</label> :<br/>
<?php $vue=getQuiSommesNous();?>
    <textarea name="QuiSommesNous" rows="10" cols=200"><?php echo($vue);?></textarea>

    <br/>

    <label for="numero">Modifier le numero de l'entreprise:</label><br/>
    <?php $vue=getNumero();?>
    <textarea name="numero" rows="10" cols="50"><?php echo($vue);?></textarea>

    <br/>

    <label name="adresse">Modifier l'adresse de l'entreprise:</label><br/>
    <?php $vue=getAdresse();?>
    <textarea name="adresse" rows="10" cols="50"><?php echo($vue);?></textarea>

    <br/>

    <label name="mail">Modifier le mail de l'entreprise:</label><br/>
    <?php $vue=getMail();?>
    <textarea name="mail" rows="10" cols="50"><?php echo($vue);?></textarea>

    <br/>


    <input type="submit" name="Envoyer"/>

</form>

<br/><br/><br/><br/>


</body>

<footer><?php include '../CSS/Footer.php';?>
</footer>
<br/><br/><br/><br/><br/><br/><br/><br/>
</html>