<?php

// cette fonction renvoi un tableau associatif de toutes les données d'un client dans la table user
function GetProfileClient($idClient){
    require('../Else/connexionDB.php');
    $requ1=$conn->query("SELECT * FROM user WHERE IDUSER=$idClient");
    $resultat=$requ1->fetch();
    return $resultat;
}

//************************************ SET ***********************************************


// modifier le prénom sur le profile
function SetNomProfile($name,$idClient){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("UPDATE user SET name=:Name WHERE IDUSER=$idClient");
    $requ1->bindParam(':Name',$name,PDO::PARAM_STR,30);
    $requ1->execute();
}

// modifier le nom de famille sur le profile
function SetLastNameProfile($Lastname,$idClient){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("UPDATE user SET lastname=:Name WHERE IDUSER=$idClient");
    $requ1->bindParam(':Name',$Lastname,PDO::PARAM_STR,30);
    $requ1->execute();
}

// modifier le pseudo sur le profile
function SetPseudoProfile($name,$idClient){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("UPDATE user SET pseudo=:Name WHERE IDUSER=$idClient");
    $requ1->bindParam(':Name',$name,PDO::PARAM_STR,30);
    $requ1->execute();
}

// modifier le numero de telephone sur le profile
function SetNumeroProfile($numero,$idClient){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("UPDATE user SET phone_num=:Name WHERE IDUSER=$idClient");
    $requ1->bindParam(':Name',$numero,PDO::PARAM_INT);
    $requ1->execute();
}

// modifier l'adresse mail sur le profile
function SetMailProfile($name,$idClient){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("UPDATE user SET email=:Name WHERE IDUSER=$idClient");
    $requ1->bindParam(':Name',$name,PDO::PARAM_STR,30);
    $requ1->execute();
}

//**************************** MOT DE PASSE *********************************

function checkingOldPW($oldPW,$idclient){
    $test=false;
    require('../Else/connexionDB.php');
    $requ1=$conn->query("SELECT pass_word FROM user WHERe IDUSER=$idclient");
    $resultat=$requ1->fetch();
    if($resultat['pass_word']==$oldPW){
        $test=true;
    }
    return $test;
}

function SameNewPW($PW1,$PW2){
    $test=false;
    if($PW1==$PW2){
        $test=true;
    }
    return $test;
}

// modifier le mot de passe sur le profile
function SetPWProfile($PW,$idClient){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("UPDATE user SET pass_word=:Name WHERE IDUSER=$idClient");
    $requ1->bindParam(':Name',$PW,PDO::PARAM_STR,30);
    $requ1->execute();
}

// ************************************ Fonction annexe pour le fonctionnement du site *****************

// cette fonction renvoi l'adresse de la premiere maison de l'utilisateur X
function getHomePrincipale($pseudo){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("SELECT city,street,street_num FROM adress_home WHERE IDHOME=1 AND IDUSER=(SELECT IDUSER FROM user WHERE pseudo=:pseudo)");
    $requ1->bindParam(':pseudo',$pseudo,PDO::PARAM_STR,20);
    $requ1->execute();
    $tab=$requ1->fetch();
    return($tab);
}
