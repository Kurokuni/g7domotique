<?php

function getIDuser($pseudo){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("SELECT IDUSER FROM user WHERE pseudo=:Pseudo");
    $requ1->bindParam(':Pseudo',$pseudo,PDO::PARAM_STR,20);
    $requ1->execute();
    $data=$requ1->fetch();
    $result=$data['IDUSER'];
    return $result;
}
// cette fonction recupere les adresses de l'utilisateur
function getAddress($IDUSER){
    require('../Else/connexionDB.php');


    $requ1=$conn->query("SELECT street_num,street,city FROM adress_home WHERE IDUSER=$IDUSER");
    $data=$requ1->fetchAll();
    //print_r($data);

    return $data;
}

function selectAverage($capteur)
{
    require('../Else/connexionDB.php');
    $requ1 = $conn->prepare("SELECT AVG(value) AS avg FROM data WHERE name=:capteur");
    $requ1->bindParam(':capteur',$capteur,PDO::PARAM_STR,20);
    $requ1->execute();
    $data = $requ1->fetch();
    $resultat = $data['avg'];
    return $resultat;
}

// cette fonction recupre les ID des adresse d'un client et les stocke dans un tableau
function adress1($IDuser){
    require('../Else/connexionDB.php');

    $tab=array();

    $requ1=$conn->prepare("SELECT IDADRESSE FROM adress_home WHERE IDUSER=$IDuser");
    $requ1->execute();

    while($data=$requ1->fetch()){
        $tab[]=$data['IDADRESSE'];
    }

    return $tab;
}

// cette fonction recupere la liste des capteurs de la maison
function listeCapteurRoom($IDadress){
    require('../Else/connexionDB.php');

    $requ1=$conn->prepare("SELECT DISTINCT capteur.name FROM capteur JOIN room ON capteur.IDROOM=room.IDROOM WHERE home=$IDadress");
    $requ1->execute();

    $data=$requ1->fetchAll();
    /*print_r($data);*/

    return($data);
}











