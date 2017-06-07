<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html>
<head><!-- head contient tout ce qui est en entete de la page -->
    <!-- le titre de la page est visible dans les recherches google -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../design.css" />
    <title>Vue d'ensemble</title>
</head>
<body>


<!-- adresse de la maison -->

<br/> <!--saut de ligne pour aerer la présentation-->
<?php
foreach ($tabCapteurs as $ligne){
$data=selectAverage($ligne['name']);
echo($ligne['name']. ' : ' .$data.'<br><br>');
}

?>



<?php
require('../CSS/Footer.php');
?>
</body>

</html>