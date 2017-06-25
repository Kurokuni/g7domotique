<?php


function insertIntoAdresse ($homeNumber,$streetNum,$street,$city,$zipcode,$country,$IDUSER){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("INSERT INTO `adress_home`(`IDHOME`, `street_num`, `street`, `city`, `zipcode`, `country`, `IDUSER`) VALUES (:homenum,:streetnum,:street,:city,:zipcode,:country,:iduser)");
    $requ1->bindParam(':homenum',$homeNumber,PDO::PARAM_INT);
    $requ1->bindParam(':streetnum',$streetNum,PDO::PARAM_INT);
    $requ1->bindParam(':street',$street,PDO::PARAM_STR,30);
    $requ1->bindParam(':city',$city,PDO::PARAM_STR,30);
    $requ1->bindParam('zipcode',$zipcode,PDO::PARAM_INT);
    $requ1->bindParam(':country',$country,PDO::PARAM_STR,30);
    $requ1->bindParam(':iduser',$IDUSER,PDO::PARAM_INT);
    $requ1->execute();
}

function recupIDuser($pseudo){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare('SELECT IDUSER FROM user WHERE pseudo=:pseudo');
    $requ1->bindParam(':pseudo',$pseudo,PDO::PARAM_STR);
    $requ1->execute();
    $data=$requ1->fetch();
    $resultat=$data['IDUSER'];
    return($resultat);
}



















