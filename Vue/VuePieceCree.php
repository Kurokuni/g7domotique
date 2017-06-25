<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html>
<head><!-- head contient tout ce qui est en entete de la page -->
    <!-- le titre de la page est visible dans les recherches google -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="" />
    <title>Pièce ajoutée</title>
</head>
<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>
<body>

<p>La pièce <?=$name?> a été <?=$varEtat?> la liste<br/> </p>


<a href="../Controleur/controleurMaison.php?pseudo=<?=$pseudo?>">Retour à la liste de vos propriétés</a>

</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>