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
<body>

<p>La pièce <?=$name?> a été <?=$varEtat?> la liste<br/> </p>


<a href="../Vue/vueAccesPiece.php?Home=maison 1">Retour a la liste des pièces</a>
<?php
require('../CSS/Footer.php');
?>
</body>

</html>