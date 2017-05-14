
<?php

//********************************* FONCTIONS POUR LE CAPTEUR******************************************


function getArgCapteur($Arg,$ID) { // attribut et table
    require('../else/connexionDB.php');
    $requ=$conn->prepare("SELECT $Arg FROM capteur WHERE IDCAPTEUR = $ID");
    $requ->execute();
    echo'<br>';
    /*while($data=$requ->fetch())
    {
        echo $data[$Arg];
        echo'<br>';
    }*/
    $datA=$requ->fetch(); // transforme en tableau
    $datAA=$datA[$Arg]; // on recupere la valeur recherchée
    //echo $datAA;
    $requ->closeCursor();
    return $datAA;
}

function getAllCapteur($ID) {
    require('../else/connexionDB.php');
    $requ=$conn->prepare("SELECT * FROM capteur WHERE IDCAPTEUR = $ID");
    $requ->execute(); // requete SQL

    echo'<br>';
    while($data=$requ->fetch())
    {
        echo('id capteur:'); echo ($data['IDCAPTEUR']); echo(' ');
        echo('name:');echo$data['name'];echo(' ');
        echo('value:');echo $data['value' ]; echo(' ');
        echo('power:');echo $data['power' ]; echo(' ');  // affichage testes
        echo('HAG:');echo $data['HAG' ]; echo(' ');
        echo('IDROOM:');echo $data['IDROOM' ]; echo(' ');
        echo'<br>';
    }
    echo'done';echo'<br>';

    $datA=$requ->fetch(); // données dans un tableau
    $requ->closeCursor();
    return $datA; // fonctionne pas !
}

function insertIntoCapteur($IDCAPTEUR,$NaMe,$value,$power,$HAG,$IDROOM)
{
    require('../else/connexionDB.php');
    $requ = $conn->prepare("INSERT INTO `capteur`(`IDCAPTEUR`, `name`, `value`, `power`, `HAG`, `IDROOM`) VALUES ($IDCAPTEUR,'thermometre',$value,$power,$HAG,$IDROOM)");
    $requ->execute();                   // ERREUR A CORRIGER*****************************************************************
    echo('élement ajouté');

}

function deleteFromCapteur($IDCAPTEUR){
    require('../else/connexionDB.php');
    $requ = $conn->prepare("DELETE FROM `capteur` WHERE IDCAPTEUR=$IDCAPTEUR");
    $requ->execute();
    echo('ligne supprimée');

}

?>



<?php




?>

<?php
/*$SeeData='command';
$tableDB='actionneur';
$donnee=getArg($SeeData,$tableDB);*/

?>

<?php
/*require('../else/connexionDB.php');
$donneee=$conn->prepare('SELECT * FROM capteur WHERE IDCAPTEUR=1');
$donneee->execute();
$donnees = $donneee->fetch();
var_dump($donnees);
$donneee->closeCursor();*/
?>








