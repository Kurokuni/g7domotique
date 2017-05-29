<?php
session_start();
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
if ($role==2){
    $Mod = true;
} else {
    $Mod = false;
}
?>

<div contenteditable= $Mod >
    Ce texte peut être édité par l'utilisateur.
</div>
<?php

require('../Footer.php');
?>
</body>
</html>