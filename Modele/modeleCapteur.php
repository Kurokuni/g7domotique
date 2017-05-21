
<?php

//********************************* FONCTIONS POUR LE CAPTEUR******************************************
require('../Else/connexionDB.php');

function getArgCapteur($Arg,$ID) { // attribut et table
    require('../Else/connexionDB.php');
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


function getAllCapt($id)
{ // on sort toutes les valeurs de tout les capteurs de la piece
    require('../Else/connexionDB.php');                                 // renvoi une liste avec des infos qui vont 3 par 3
    $requ = $conn->prepare("SELECT * FROM capteur WHERE IDROOM=$id ORDER BY name");
    $requ->execute();
    $tab = array();
    while ($data = $requ->fetch()) {
        $tab[] = $data['name'];
        $tab[] = $data['value'];
        $tab[] = $data['time'];
    }
    return $tab;
}

function getAllOneCapteur($ID) {  // on recupere TOUTES les données d'un capteur
    require('../Else/connexionDB.php');
    $requ=$conn->prepare("SELECT * FROM capteur WHERE IDCAPTEUR = $ID");
    $requ->execute(); // requete SQL
    $tab=array();

    echo'<br>';
    while($data=$requ->fetch())
    {
        $tab[]=$data['IDCAPTEUR'];
        $tab[]=$data['name'];
        $tab[]=$data['value'];
        $tab[]=$data['power'];  // affichage testes
        $tab[]=$data['HAG'];
        $tab[]=$data['IDROOM'];
        $tab[]=$data['time'];
        echo'<br>';
    }
    echo'done';echo'<br>';

    $requ->closeCursor();
    return $tab; // fonctionne pas !
}

function insertIntoCapteur($NaMe,$value,$power,$HAG,$IDROOM)
{
    require('../Else/connexionDB.php');
    $requ1=$conn->query("SELECT max(IDCAPTEUR)as MAX FROM capteur");
    $donnee=$requ1->fetch();
    $IDCAPTEUR=$donnee['MAX']+1;
    $requ = $conn->prepare("INSERT INTO `capteur`(`IDCAPTEUR`, `name`, `value`, `power`, `HAG`, `IDROOM`,`time`) VALUES (:IDCAPT,:NAME,:value,:power,:HAG,:IDROOM,NOW())");
    $requ->bindParam(':IDCAPT',$IDCAPTEUR,PDO::PARAM_INT);
    $requ->bindParam(':NAME',$NaMe,PDO::PARAM_STR,20);
    $requ->bindParam(':value',$value,PDO::PARAM_INT);
    $requ->bindParam(':power',$power,PDO::PARAM_INT);
    $requ->bindParam(':HAG',$HAG,PDO::PARAM_INT);
    $requ->bindParam(':IDROOM',$IDROOM,PDO::PARAM_INT);
    //$requ->bindParam(':DATE',NOW(),PDO::PARAM_INT);
    $requ->execute();
    //$t = date('Y-m-d H:i:s'); inserer un horaire

}

function deleteFromCapteur($IDCAPTEUR){
    require('../Else/connexionDB.php');
    $requ = $conn->prepare("DELETE FROM `capteur` WHERE IDCAPTEUR=$IDCAPTEUR");
    $requ->execute();

}

?>


<?php
/*require('../Else/connexionDB.php');
$donneee=$conn->prepare('SELECT * FROM capteur WHERE IDCAPTEUR=1');
$donneee->execute();
$donnees = $donneee->fetch();
var_dump($donnees);
$donneee->closeCursor();*/
?>


