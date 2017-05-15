<?php



function getAllCapt($id){
    require('../else/connexionDB.php');
    $requ=$conn->prepare("SELECT * FROM capteur WHERE IDROOM=$id ORDER BY name");
    $requ->execute();
    $tab=array();
    while($data=$requ->fetch()){
        $tab[]=$data['name'];
        $tab[]=$data['value'];
        $tab[]=$data['time'];
    }
    return $tab;

}


function latestData($data,$id){   // on va chercher la valeur la plus recente de la donnée
    require('../else/connexionDB.php');
    $tab=array();
    $requ=$conn->prepare("SELECT value FROM capteur WHERE name='thermometre' AND IDROOM=$id AND time=(SELECT max(time) FROM capteur WHERE name='thermometre' AND IDROOM=$id);");  // ERREUR LORS DE LA COMPIL DU STRING
    $requ->execute();
    $quette=$requ->fetch();
    $tab[]=$data;
    $tab[]=$quette['value'];

    return $tab;
}

function latestData2($data,$id){    // on va chercher la valeur la plus recente de la donnée
    require('../else/connexionDB.php');
    $tab=array();
    $requ=$conn->prepare("SELECT value FROM capteur WHERE name='luxmetre' AND IDROOM=$id AND time=(SELECT max(time) FROM capteur WHERE name='luxmetre' AND IDROOM=$id);");  // ERREUR LORS DE LA COMPIL DU STRING
    $requ->execute();
    $quette=$requ->fetch();
    $tab[]=$data;
    $tab[]=$quette['value'];

    return $tab;
}