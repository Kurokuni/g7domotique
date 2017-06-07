<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../design.css" />
    <title>Connexion</title>
</head>
<body>
<?php
require('../Header.php');
if ($_SESSION["role"]==2){
    $Mod = true;
} else {
    $Mod = false;
}
?>
<?php
echo ''



?>
<div contenteditable= $Mod >
    Ce texte peut être édité par l'utilisateur.
</div>
<?php
require('../CSS/Footer.php');
?>
</body>
</html>