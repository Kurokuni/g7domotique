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
<body>
<?php
require ('../Header.php');
?>








<?php
require('../CSS/Footer.php');
?>
</body>
</html>