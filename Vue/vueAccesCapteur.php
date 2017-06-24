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
    <link rel="stylesheet" href="../CSS/design.css" />
    <title>Accès Capteurs</title>
</head>
<header>
    <?php include '../CSS/Header_Connecte.php';?>
</header>
<body>



<!-- ajouter tout les infos communes -->
<!-- nouveau code en esperant que ca fonctionne-->



<article>
    <h3>Accès aux capteurs de la piece: <!--requete php nom de la piece --></h3>

    <a href="../controleur/controleurCapteur.php?table=capteur&attribut=value&ID=1">capteur 1</a><br/>
    <a href="../controleur/controleurCapteur.php?table=capteur&attribut=value&ID=2">capteur 2</a><br/>
    <a href="../controleur/controleurCapteur.php?table=capteur&attribut=value&ID=3">capteur 3</a><br/>


<!-- peu être mettre une photo de la piece/ type de piece -->
    <p>retour au choix de la piece</p><!-- a changer en lien -->

</article>

<!-- require footer.php -->
<?php
require('../CSS/Footer.php');
?>
</body>

</html>





















