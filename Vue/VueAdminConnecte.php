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
    <link rel="stylesheet" href="../CSS/design.css" />
    <title>Admin</title>
</head>

<body>
<?php
require ('../CSS/Header_Deconnecte.php');
?>

<br/><br/>

<form action="../Controleur/ControleurAdministrateur.php" method="post">

    <label for="typeDeRecherche">information recherchée :<br/></label>
    <select name="typeDeRecherche">
        <option value="InfoUser">informations sur un utilisateur</option>
        <option value="InfoDomicile">Informations sur un domicile</option>
    </select>
<br/><br/>
    <label for="recherche">rechercher un domicile ou un utilisateur :<br/></label>
    <input type="text" name="recherche" />

    <input type="submit" value="envoyer" />
</form>

<br/><br/>

<?php

if(isset($recherche1)){
    foreach($recherche1 as $ligne){
        echo($ligne['name'].' '.$ligne['lastname'].'     adresse : '.$ligne['street_num'].' '.$ligne['street'].' '.$ligne['zipcode'].' '.
        $ligne['city'].' '.$ligne['country']);?><a href="../Vue/VueAccesPiece.php?Home=maison%201&id=<?=$ligne['IDADRESSE']?>">Voir le domicile</a><br/>
<?php
    }
}

if(isset($recherche2)){
    foreach($recherche2 as $ligne){
        echo($ligne['name'].' '.$ligne['lastname'].' '.$ligne['pseudo'].' '.$ligne['email'].' '.$ligne['phone_num'].'<br>');
    }
}

?>

<!-- de meme pour l'autre recherche, à faire entierement, donner un autre nom a la recherche -->

<br/><br/>


<a href="../Vue/ConditionDUtilisation.php">Modifier les textes editables.</a>





<?php
require('../CSS/Footer.php');
?>
</body>
</html>