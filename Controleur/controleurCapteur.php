<?php

require('../modele/modeleCapteur.php');

function CreerTableauHistorique($capteur, $tab) // requiere nom du capt et tab avec toutes les valeurs
{
    $TabSortie = array();
    $curseur = 0;
    $length = count($tab);
    while ($curseur < $length) {
        if ($tab[$curseur] == $capteur) {
            $TabSortie[] = $tab[$curseur];
            $TabSortie[] = $tab[$curseur + 1]; // SORT UN TABLEAU DE L'HISTORIQUE DE $capteur
            $TabSortie[] = $tab[$curseur + 2]; // reste a l'afficher
        }
        $curseur = $curseur + 3;
    }
    return ($TabSortie);
}


// **************** DEBUT ****************




if(isset($_POST['nameAjout']) && isset($_POST['value']) && isset($_POST['power']) && isset($_POST['HAG'])){
    $name = $_POST['nameAjout'];
    $id=$_GET['id'];
    insertIntoCapteur($name,$_POST['value'],$_POST['power'],$_POST['HAG'],$id);
    $varEtat='ajouté à';
    require('../Vue/VueCapteurCree.php');

}

elseif(isset($_POST['nameSuppr']) && isset($_POST['numberSuppr'])){
    $name=$_POST['nameSuppr'];
    deleteFromCapteur($_POST['numberSuppr']);
    $varEtat='supprimé de';
    require('../Vue/VueCapteurCree.php');
}

else {

// DEFINITION DES VARIABLES
    /*$capteur = $_GET['capteur'];
    $IDpiece = $_GET['IDPiece'];
    $piece = $_GET['piece'];

    $tab = getAllCapt($IDpiece);

    $TabHistoCapt = CreerTableauHistorique($capteur, $tab);

    require('../Vue/VueCapteur.php');*/

    if(isset($_GET['id'])){
        $name='le capteur';
        deleteFromCapteur($_GET['id']);
        $varEtat='supprimé de';
        require('../Vue/VueCapteurCree.php');
}

}
?>


