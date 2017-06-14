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
    <title>ChoixAdresse</title>
</head>
<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>
<body>

<?php

foreach ($nbadresse as $element)
{
    echo '<input type="button" value="Adresse '.$element[0]. $element[1]. $element[2]. $element[3]. $element[4].'" onclick="alert(\'Adresse\')">';
}

?>

</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>
