<!DOCTYPE html>
<html>
<head><!-- head contient tout ce qui est en entete de la page -->
    <!-- le titre de la page est visible dans les recherches google -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="" />
    <title>Acces Pièce</title>
</head>
<body>

<!-- require header.php; -->

<!-- ajouter tout les infos communes -->


<article>
    <h3>Accès aux pièces <!--requete php nom de la piece --></h3>

    <a href="../Controleur/controleurPiece.php?table=room&ID=1">pièce 1</a><br/>
    <a href="../Controleur/controleurPiece.php?table=room&ID=2">pièce 2</a><br/>
    <a href="../Controleur/controleurPiece.php?table=room&ID=3">pièce 3</a><br/>


    <!-- peu être mettre une photo de la piece/ type de piece -->
    <p>retour au menu</p><!-- a changer en lien -->

</article>

<!-- require footer.php -->

</body>

</html>