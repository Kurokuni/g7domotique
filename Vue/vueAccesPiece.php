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
    <title>Acces Pièce</title>
</head>

<header>
    <?php include '../CSS/Header_Connecte.php';?>
</header>
<body>


<!-- ajouter tout les infos communes -->
<?php
require('../Modele/modelePiece.php');
?>

<h2><?=$_GET['Home']?></h2>

<?php
    $IDHOME=$_GET['id'];
?>


<article>
    <h3>Accès aux pièces <!--requete php nom de la piece --></h3>
    <!-- acces dynamique aux pieces -->
    <?php
    $ListePiece=ListePiece($IDHOME);
    $nombrePiece=count($ListePiece); // nombre de piece + leurs ID
    $var=0; // indentation du tableau lié au count
    while($var<$nombrePiece) {
        ?>
        <p>Pièce n°<?=$ListePiece[$var]?> : <a href="../Controleur/controleurPiece.php?table=room&ID=<?=$ListePiece[$var]?>&room=<?=$ListePiece[$var+1]?>&idhome=<?=$IDHOME?>"><?=$ListePiece[$var+1]?></a>   <a href="../Controleur/controleurPiece.php?numberSuppr=<?=$ListePiece[$var]?>&nameSuppr=<?=$ListePiece[$var+1]?>">Supprimer</a></p>
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

</article>


</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>