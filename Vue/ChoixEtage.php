<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
for ($etage = $GLOBALS['min'];$etage <= $GLOBALS['max'];$etage++){ // On créé une boucle qui créé des boutons avec le nom de l'étage dedans
    echo '<input type="button" value="Etage '.$etage.'" onclick="alert(\'Etage\')">'; // On concatène le numéro de l'étage dans la valeur du bouton
}
?>

</body>
</html>