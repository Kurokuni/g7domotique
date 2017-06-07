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
    <link rel="stylesheet" href="../design.css" />
    <title>Acces Pièce</title>
</head>
<body>

<?php
require ('../Header.php');
?>

<h2>bienvenue <?=$_SESSION["nom"]?></h2>

<br/>
<p>Accedez à vos maison en un clic ici:</p>

<!-- a transformer en dynamique-->
<a href="../Vue/vueAccesPiece.php?Home=maison 1">Maison 1</a><br/>
<a href="../Vue/vueAccesPiece.php?Home=maison 2">Maison 2</a><br/>

<br/><br/><br/><br/>


<?php
require('../CSS/Footer.php');
?>

</body>

</html>