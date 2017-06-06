<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><!-- head contient tout ce qui est en entete de la page -->
    <!-- le titre de la page est visible dans les recherches google -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../design.css" />
    <title>Acces Capteurs</title>
</head>
<body>

<?php
require('../Header.php');
?>

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

</body>

</html>





















