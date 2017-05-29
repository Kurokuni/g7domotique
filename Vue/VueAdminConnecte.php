<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../design.css" />
    <title>Admin</title>
</head>

<body>
<?php
require ('../Header.php');
?>
<a href="../Vue/VueUserConnecte.php">Accéder à vos maison.</a>
<a href="../Vue/VueModifierMotDePasseAC.php">Modifier le mot de passe d'un client.</a>
<a href="../Vue/ConditionDUtilisation.php">Modifier les condition d'utilisation.</a>





<?php
require('../Footer.php');
?>
</body>
</html>