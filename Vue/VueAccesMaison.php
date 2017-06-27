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
    <title>Accès Maison</title>
</head>

<header>
    <?php include '../CSS/Header_Connecte.php';?>
</header>
<body>
<div style="margin-top: 15%" class="VueAccesMaison">
<?php

echo "<div align=center class=\"Container_VueEnsemble\">" ,($adress['street_num'].' '.$adress['street'].' '.$adress['city']);

require('../Controleur/controleurVueEnsemble.php')
?>

<br>

<p>Accédez aux détails de vos propriétés :</p>

<?php
foreach($listeMaison as $ligne){
    ?><p><?=$ligne['city']?> <?=$ligne['street_num']?> <?=$ligne['street']?> <a href="../Vue/VueAccesPiece.php?Home=maison 1&id=<?=$IDAdresse1?>&pseudo=<?=$Nom?>"><strong>accès ici</strong></a><br/></p><?php
}
?>

<a href="../Vue/ProfilClient.php?iduser=<?=getIDuser($Nom);?>"><strong>Modifier votre profile</strong></a></p>
<p><a href="../Vue/VueCreerMaison.php?pseudo=<?=$Nom?>">Ajouter une maison</a></p>


<?php
require('../CSS/Footer.php');
?>
</div>
<script type="text/javascript" src="../Else/SideBar.js"></script>
</body>

<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>






