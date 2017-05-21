<?php

require('../Else/connexionDB.php');

/*On récupère le contenu des etages de la table adress_home*/

    $etage= $conn -> query('SELECT `etage_min`, `etage_max` FROM `adress_home` WHERE IDHOME=3'); /* Recupère les étage en fonction de l'identité de la maison*/
    $nbetage = $etage -> fetch();/* On recupere la donner de l'objet*/
    //print_r($nbetage);/* Permet d'afficher les données de la requete*/
?>

<?php

function recupétages($IDHome){
    require('../Else/connexionDB.php');
    $liste=array();
    $requ=$conn->query("SELECT * FROM etage WHERE IDHOME=$IDHome");
    $data=$requ->fetch;
    if(isset($data['Etage_-1'])){
        $liste[0]=-1;
    }
    if(isset($data['Etage_0'])){
        $liste[1]=-0;
    }
    if(isset($data['Etage_1'])){
        $liste[2]=1;
    }
    if(isset($data['Etage_2'])){
        $liste[3]=2;
    }
    return($liste);
}


?>
