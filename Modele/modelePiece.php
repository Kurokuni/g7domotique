<?php



function getAllCapt($id){ // on sort toutes les données de tout les capteurs de la piece
    require('../Else/connexionDB.php');                                 // renvoi une liste avec des infos qui vont 3 par 3
    $requ = $conn->prepare("SELECT data.name,data.value,data.date FROM capteur JOIN data ON capteur.IDCAPTEUR=data.IDCAPTEUR WHERE IDROOM=$id");
    $requ->execute();
    $tab = array();

    while ($data = $requ->fetch()) {
        $tab[] = $data['name'];
        $tab[] = $data['value'];
        $tab[] = $data['date'];
    }
    return $tab;

}


function latestData($data,$id){   // on va chercher la valeur la plus recente de la donnée*******************************
    require('../Else/connexionDB.php');
    $tab=array();
    $requ=$conn->prepare("SELECT value FROM capteur WHERE name=:DATA AND IDROOM=$id AND time=(SELECT max(time) FROM capteur WHERE name=:DATA AND IDROOM=$id);");  // ERREUR LORS DE LA COMPIL DU STRING
    $requ->bindParam(':DATA',$data,PDO::PARAM_STR,20);
    $requ->execute();
    $quette=$requ->fetch();
    $tab[]=$data;
    $tab[]=$quette['value'];

    return $tab;
}


// fonctions pour l'affichage des pieces en dynamique*********************************************************************

function ListePiece($id){
    require('../Else/connexionDB.php');
    $tab=array();
    $requ=$conn->prepare("SELECT IDROOM, name FROM room WHERE home=$id");  // id = id unique de la maison
    $requ->execute();
    while($quette=$requ->fetch()){
        $tab[]=$quette['IDROOM'];
        $tab[]=$quette['name'];
    }
    return($tab);
}

function CreerNouvellePiece($name,$floor,$home,$HAG){   // fonction pour créer une nouvelle pièce ***********************
    require('../Else/connexionDB.php');
    $requ2=$conn->prepare("INSERT INTO `room`(`name`, `floor`, `home`, `HAG`, `IDHAG`) VALUES (:name,:floor,:home,:HAG,:IDHAG)");
    $requ2->bindParam(':name',$name,PDO::PARAM_STR,20);
    $requ2->bindParam(':floor',$floor,PDO::PARAM_INT);
    $requ2->bindParam(':home',$home,PDO::PARAM_INT);
    $requ2->bindParam(':HAG',$HAG,PDO::PARAM_INT);
    $requ2->bindParam(':IDHAG',$HAG,PDO::PARAM_INT);
    $requ2->execute();
}

function SupprimerPiece($id){
    require('../Else/connexionDB.php');
    $requ1=$conn->prepare("DELETE FROM room where IDROOM=$id");
    $requ1->execute();
}


function CaptInRoom($IDroom){
    require('../Else/connexionDB.php');
    // on sort les capteurs de la piece
    $tabCapt=array();
    $requ1=$conn->query("SELECT DISTINCT name,IDCAPTEUR FROM capteur WHERE IDROOM=$IDroom");
    while($cursor1=$requ1->fetch()){
        $tabCapt[]=$cursor1['name'];
    }

    // on sort les dernieres valeurs en date pour chaque capteur
    $increment=0;
    $length=count($tabCapt);
    $tabValue=array();
    while($increment<$length){
        $requ=$conn->prepare("SELECT value FROM capteur WHERE IDROOM=$IDroom AND name=:NAME AND time=(SELECT max(time)as Time FROM capteur WHERE name=:NAME and IDROOM=$IDroom)");
        $requ->bindParam(':NAME',$tabCapt[$increment],PDO::PARAM_STR,20);
        $requ->execute();
        $parcours=$requ->fetch();
        $donnee=$parcours['value'];
        $tabValue[]=$donnee;
        $increment++;
    }
    $TAB=array();
    for($x=0;$x<$length;$x++){
        $TAB[]=$tabCapt[$x];
        $TAB[]=$tabValue[$x];
    }
    return($TAB);
}

function CapteINroom($idpiece){
    require('../Else/connexionDB.php');

    $requ1=$conn->query("SELECT DISTINCT name,IDCAPTEUR FROM capteur WHERE IDROOM=$idpiece");
    $dataA=$requ1->fetchAll();

    return($dataA);
}

function lastData($idpiece){
    require('../Else/connexionDB.php');

    $tab=CapteINroom($idpiece);
    $TAB=array();
    foreach($tab as $ligne) {
        $requ2 = $conn->prepare("SELECT value FROM data WHERE date=(SELECT max(date) as date FROM data WHERE IDCAPTEUR=:idcapteur)");
        $requ2->bindParam(':idcapteur', $ligne['IDCAPTEUR'], PDO::PARAM_INT);
        $requ2->execute();
        $dataX = $requ2->fetch();
        $TAB[] = $dataX['value'];
    }
    return($TAB);
}

/*$testcapt=CapteINroom(2);
$testval=lastData(2);

$x=0;
foreach($testcapt as $ligne){
    echo($ligne['IDCAPTEUR'].' '.$ligne['name'].' '.$testval[$x].'<br>');
    $x++;
}
*/


?>
