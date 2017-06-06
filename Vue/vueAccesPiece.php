<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><!-- head contient tout ce qui est en entete de la page -->
    <!-- le titre de la page est visible dans les recherches google -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../design.css" />
    <title>Acces Pièce</title>
</head>
<body>

<?php
require ('../Header.php');
?>

<!-- ajouter tout les infos communes -->
<?php
require('../Modele/modelePiece.php');
?>

<h2><?=$_GET['Home']?></h2>

<article>
    <h3>Accès aux pièces <!--requete php nom de la piece --></h3>
    <!-- acces dynamique aux pieces -->
    <?php
    $ListePiece=ListePiece();
    $nombrePiece=count($ListePiece); // nombre de piece + leurs ID
    $var=0; // indentation du tableau lié au count
    while($var<$nombrePiece) {
        ?>
        <p>Pièce n°<?=$ListePiece[$var]?> : <a href="../Controleur/controleurPiece.php?table=room&ID=<?=$ListePiece[$var]?>&room=<?=$ListePiece[$var+1]?>"><?=$ListePiece[$var+1]?></a></p>
        <?php
        $var=$var+2;
    }
    ?>

    <p>Ajouter une pièce:</p>
    <form action="../Controleur/controleurPiece.php" method="post">
        <label for="nameAjout">nom</label> : <input type="text" name="nameAjout" /><br/>
        <label for="floor">étage</label> : <input type="number" name="floor" /><br/>
        <label for="home">identifiant de la maison</label> : <input type="number" name="home" /><br/>
        <label for="HAG">Hag associé</label> : <input type="number" name="HAG" /><br/>
        <input type="submit" value="Envoyer" />
    </form>
    <br/>

    <p>Supprimer une pièce:</p>
    <form action="../Controleur/controleurPiece.php" method="post">
        <label for="nameSuppr">nom de la pièce a supprimer</label> : <input type="text" name="nameSuppr"  /><br/>
        <label for="numberSuppr">numéro de la pièce à supprimer</label> : <input type="number" name="numberSuppr" /><br/>
        <input type="submit" value="Envoyer" />
    </form>
    <br/>
    <!-- peu être mettre une photo de la piece/ type de piece -->
    <p><a href="../Accueil.php">retour au menu</a></p><!-- a changer en lien -->

</article>

<?php
require('../Footer.php');
?>

</body>

</html>