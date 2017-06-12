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
<body class="AccesPiece">


<!-- ajouter tout les infos communes -->
<?php
require('../Modele/modelePiece.php');
?>

<h2><?=$_GET['Home']?></h2>

<?php
    $IDHOME=$_GET['id'];
?>


<article>
    <h3><strong><u>Accès aux pièces <!--requete php nom de la piece --></u></strong></h3>
    <!-- acces dynamique aux pieces -->
    <?php
    $ListePiece=ListePiece($IDHOME);
    $nombrePiece=count($ListePiece); // nombre de piece + leurs ID
    $var=0; // indentation du tableau lié au count
    while($var<$nombrePiece) {
        ?>
        <p>Pièce n°<?=$ListePiece[$var]?> : <a href="../Controleur/controleurPiece.php?table=room&ID=<?=$ListePiece[$var]?>&room=<?=$ListePiece[$var+1]?>&idhome=<?=$IDHOME?>"><?=$ListePiece[$var+1]?></a></p>
        <?php
        $var=$var+2;
    }
    ?>

    <p><strong><u>Ajouter une pièce:</u></strong></p>
    <form action="../Controleur/controleurPiece.php" method="post">
        <label for="nameAjout">Nom</label> : <input type="text" name="nameAjout" /><br/>
        <label for="floor">Étage</label> : <input type="number" name="floor" /><br/>
        <label for="home">Identifiant de la maison</label> : <input type="number" name="home" /><br/>
        <label for="HAG">Hag associé</label> : <input type="number" name="HAG" /><br/>
        <input type="submit" value="Envoyer" />
    </form>
    <br/>

    <p><strong><u>Supprimer une pièce:</u></strong></p>
    <form action="../Controleur/controleurPiece.php" method="post">
        <label for="nameSuppr">Nom de la pièce a supprimer</label> : <input type="text" name="nameSuppr"  /><br/>
        <label for="numberSuppr">Numéro de la pièce à supprimer</label> : <input type="number" name="numberSuppr" /><br/>
        <input type="submit" value="Envoyer" />
    </form>
    <br/>
    <!-- peu être mettre une photo de la piece/ type de piece -->
    <p><a href="Accueil.php">retour au menu</a></p><!-- a changer en lien -->

</article>


</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>