<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
require('../Controleur/ChoixAdresse.php');/* on recupere ce que l'on a demander dans le modèle */
echo '<input type="button" value="Adresse:'.$nbadresse[0].$nbadresse[1].$nbadresse[2].$nbadresse[3].$nbadresse[4].'" onclick="alert(\'Adresse\')">';//On concatène tous les éléments de l'adresse dans la valeur du bouton
?>



</body>
</html>
