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

function selectAverage($capteur,$idhome)
{
    require('../Else/connexionDB.php');
    $requ1 = $conn->prepare("SELECT data.value AS avg FROM data JOIN capteur JOIN room ON data.IDCAPTEUR=capteur.IDCAPTEUR AND capteur.IDROOM=room.IDROOM WHERE data.name=:capteur AND room.home=$idhome");
    $requ1->bindParam(':capteur',$capteur,PDO::PARAM_STR,20);
    $requ1->execute();
    $result=0;
    $x=0;
    while($data=$requ1->fetch()){
        $result=$result+$data['avg'];
        $x++;
        if($x==10){break;}
    }
    if($x==0){$x=1;}
    $resultat = $result/$x;
    return $resultat;
}

// cette fonction recupre les ID des adresse d'un client et les stocke dans un tableau
function adress1($IDuser){
    require('../Else/connexionDB.php');

    $requ1=$conn->prepare("SELECT IDADRESSE FROM adress_home WHERE IDUSER=$IDuser AND IDHOME=1");
    $requ1->execute();

    while($data=$requ1->fetch()){
        $resultat=$data['IDADRESSE'];
    }

    return $resultat;
}

// cette fonction recupere la liste des capteurs de la maison
function listeCapteurRoom($IDadress){
    require('../Else/connexionDB.php');

    $requ1=$conn->prepare("SELECT DISTINCT capteur.name FROM capteur JOIN room ON capteur.IDROOM=room.IDROOM WHERE home=$IDadress");
    $requ1->execute();

    $data=$requ1->fetchAll();

    return($data);
}

// cette fonction renvoi l'adresse de la premiere maison de l'utilisateur X
function getHomePrincipale($pseudo){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("SELECT city,street,street_num FROM adress_home WHERE IDHOME=1 AND IDUSER=(SELECT IDUSER FROM user WHERE pseudo=:pseudo)");
    $requ1->bindParam(':pseudo',$pseudo,PDO::PARAM_STR,20);
    $requ1->execute();
    $tab=$requ1->fetch();
    return($tab);
}









