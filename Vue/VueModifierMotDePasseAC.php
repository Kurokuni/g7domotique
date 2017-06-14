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
    <title>Title</title>
</head>
<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>
<body>









</body>
<?php
require('../CSS/Footer.php');
?>
</html>