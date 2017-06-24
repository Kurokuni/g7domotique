<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ChoixEtage</title>
</head>
<header>
    <?php include '../CSS/Header_Connecte.php';?>
</header>
<body>

<?php
for ($etage = $GLOBALS['min'];$etage <= $GLOBALS['max'];$etage++){ // On créé une boucle qui créé des boutons avec le nom de l'étage dedans
    echo '<input type="button" value="Etage '.$etage.'" onclick="alert(\'Etage\')">'; // On concatène le numéro de l'étage dans la valeur du bouton
}
?>

</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>