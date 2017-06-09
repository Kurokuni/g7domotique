<?php

//******************************* GET **************************************


//recupere le script editable
function getQuiSommesNous(){
    require('../Else/connexionDB.php');
    $requ1=$conn->query("SELECT QuiSommesNous FROM admin WHERE id=(SELECT max(id) FROM admin)");
    $data=$requ1->fetch();
    $resultat=$data['QuiSommesNous'];
    return($resultat);
}

//recupere les conditions editables
function getConditions(){
    require('../Else/connexionDB.php');
    $requ1=$conn->query("SELECT conditions FROM admin WHERE id=(SELECT max(id) FROM admin)");
    $data=$requ1->fetch();
    $resultat=$data['conditions'];
    return($resultat);
}

//recupere le numero editable
function getNumero(){
    require('../Else/connexionDB.php');
    $requ1=$conn->query("SELECT numero FROM admin WHERE id=(SELECT max(id) FROM admin)");
    $data=$requ1->fetch();
    $resultat=$data['numero'];
    return($resultat);
}

//recupere l'adresse editable
function getAdresse(){
    require('../Else/connexionDB.php');
    $requ1=$conn->query("SELECT adresse FROM admin WHERE id=(SELECT max(id) FROM admin)");
    $data=$requ1->fetch();
    $resultat=$data['adresse'];
    return($resultat);
}

//recupere le mail editable
function getMail(){
    require('../Else/connexionDB.php');
    $requ1=$conn->query("SELECT mail FROM admin WHERE id=(SELECT max(id) FROM admin)");
    $data=$requ1->fetch();
    $resultat=$data['mail'];
    return($resultat);
}



//****************************************** SET **************************************************




//modifie le script editable
function setQuiSommesNous($text){
    require('../Else/connexionDB.php');
    $requsec=$conn->query("SELECT max(id) as id FROM admin");
    $data=$requsec->fetch();
    $ID=$data['id'];
    $requ1=$conn->prepare("UPDATE `admin` SET `QuiSommesNous`=:text WHERE id=$ID");
    $requ1->bindParam(':text',$text,PDO::PARAM_STR);
    $requ1->execute();
}


//modifie les conditions editable
function setconditions($text){
    require('../Else/connexionDB.php');
    $requsec=$conn->query("SELECT max(id) as id FROM admin");
    $data=$requsec->fetch();
    $ID=$data['id'];
    $requ1=$conn->prepare("UPDATE `admin` SET conditions=:text WHERE id=$ID");
    $requ1->bindParam(':text',$text,PDO::PARAM_STR);
    $requ1->execute();
}


//modifie le numero editable
function setNumero($text){
    require('../Else/connexionDB.php');
    $requsec=$conn->query("SELECT max(id) as id FROM admin");
    $data=$requsec->fetch();
    $ID=$data['id'];
    $requ1=$conn->prepare("UPDATE admin SET numero=:text WHERE id=$ID");
    $requ1->bindParam(':text',$text,PDO::PARAM_STR);
    $requ1->execute();
}

//modifie l'adresse editable
function setAdresse($text){
    require('../Else/connexionDB.php');
    $requsec=$conn->query("SELECT max(id) as id FROM admin");
    $data=$requsec->fetch();
    $ID=$data['id'];
    $requ1=$conn->prepare("UPDATE admin SET adresse=:text WHERE id=$ID");
    $requ1->bindParam(':text',$text,PDO::PARAM_STR);
    $requ1->execute();
}

//modifie le mail editable
function setMail($text){
    require('../Else/connexionDB.php');
    $requsec=$conn->query("SELECT max(id) as id FROM admin");
    $data=$requsec->fetch();
    $ID=$data['id'];
    $requ1=$conn->prepare("UPDATE `admin` SET mail=:text WHERE id=$ID");
    $requ1->bindParam(':text',$text,PDO::PARAM_STR);
    $requ1->execute();
}


