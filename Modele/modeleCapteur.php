
<?php

//********************************* FONCTIONS POUR LE CAPTEUR******************************************


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

function insertIntoCapteur($IDCAPTEUR,$NaMe,$value,$power,$HAG,$IDROOM,$time)
{
    require('../Else/connexionDB.php');
    echo $NaMe;
    $requ = $conn->prepare("INSERT INTO `capteur`(`IDCAPTEUR`, `name`, `value`, `power`, `HAG`, `IDROOM`,`time`) VALUES (:IDCAPT,:NAME,:value,:power,:HAG,:IDROOM,:DATE)");
    $requ->bindParam(':IDCAPT',$IDCAPTEUR,PDO::PARAM_INT);
    $requ->bindParam(':NAME',$NaMe,PDO::PARAM_STR,20);
    $requ->bindParam(':value',$value,PDO::PARAM_INT);
    $requ->bindParam(':power',$power,PDO::PARAM_INT);
    $requ->bindParam(':HAG',$HAG,PDO::PARAM_INT);
    $requ->bindParam(':IDROOM',$IDROOM,PDO::PARAM_INT);
    $requ->bindParam(':DATE',$time,PDO::PARAM_INT);
    $requ->execute();                   // ERREUR A CORRIGER*****************************************************************
    //$t = date('Y-m-d H:i:s'); inserer un horaire
    echo('élement ajouté');

}

function deleteFromCapteur($IDCAPTEUR){
    require('../Else/connexionDB.php');
    $requ = $conn->prepare("DELETE FROM `capteur` WHERE IDCAPTEUR=$IDCAPTEUR");
    $requ->execute();
    echo('ligne supprimée');

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


