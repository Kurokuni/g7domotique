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
    <!--<title>Acces Pièce</title>-->
</head>
<body>
<?php
require('../Header.php');

echo($adress['street_num'].' '.$adress['street'].' '.$adress['city']);

require('../Controleur/controleurVueEnsemble.php')
?>


<p>accedez au details de vos propriétés ici :</p>

<?php
foreach($listeMaison as $ligne){
    ?><p><?=$ligne['city']?> <?=$ligne['street_num']?> <?=$ligne['street']?> <a href="../Vue/VueAccesPiece.php?Home=maison 1&id=1">acces ici</a><br/></p><?php
}
?>

<?php
require('../Footer.php');
?>


</body>

</html>
















