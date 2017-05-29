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

?>

<div contenteditable= $Mod >
    Ce texte peut être édité par l'utilisateur.
</div>
<?php
if ($role==2){
    $Mod = true;
} else {
    $Mod = false;
}
require('../Footer.php');
?>
</body>
</html>