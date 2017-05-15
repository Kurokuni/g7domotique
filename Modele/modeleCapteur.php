
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
    $tab=array();

    echo'<br>';
    while($data=$requ->fetch())
    {
        $tab[]=$data['IDCAPTEUR']; echo('id capteur:'); echo ($data['IDCAPTEUR']); echo(' ');
        $tab[]=$data['name']; echo('name:');echo$data['name'];echo(' ');
        $tab[]=$data['value'];echo('value:');echo $data['value' ]; echo(' ');
        $tab[]=$data['power'];echo('power:');echo $data['power' ]; echo(' ');  // affichage testes
        $tab[]=$data['HAG'];echo('HAG:');echo $data['HAG' ]; echo(' ');
        $tab[]=$data['IDROOM'];echo('IDROOM:');echo $data['IDROOM' ]; echo(' ');
        $tab[]=$data['time'];
        echo'<br>';
    }
    echo'done';echo'<br>';

    $requ->closeCursor();
    return $tab; // fonctionne pas !
}

function insertIntoCapteur($IDCAPTEUR,$NaMe,$value,$power,$HAG,$IDROOM)
{
    require('../else/connexionDB.php');
    $requ = $conn->prepare("INSERT INTO `capteur`(`IDCAPTEUR`, `name`, `value`, `power`, `HAG`, `IDROOM`,`time`) VALUES ($IDCAPTEUR,'thermometre',$value,$power,$HAG,$IDROOM,NOW())");
    $requ->execute();                   // ERREUR A CORRIGER*****************************************************************
    //$t = date('Y-m-d H:i:s'); inserer une horraire
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








