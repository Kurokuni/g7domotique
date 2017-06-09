<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
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
require ('../CSS/Header_Connecte.php');
?>
<a href="../Vue/VueUserConnecte.php">Accéder à vos maison.</a>
<a href="../Vue/VueModifierMotDePasseAC.php">Modifier le mot de passe d'un client.</a>
<a href="../Vue/ConditionDUtilisation.php">Modifier les textes editables.</a>





<?php
require('../CSS/Footer.php');
?>
</body>
</html>