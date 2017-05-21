<?php

require('../Modele/modelePiece.php');

if(isset($_POST['nameAjout']) && isset($_POST['floor']) && isset($_POST['home']) && isset($_POST['HAG'])){
    $name = $_POST['nameAjout'];
    $floor = $_POST['floor'];    // A CORRIGER
    $home = $_POST['home'];
    $HAG = $_POST['HAG'];
    CreerNouvellePiece($name,$floor,$home,$HAG);
    $varEtat='ajoutée à';
    require('../Vue/VuePieceCree.php');

    // créer la pièce et rediriger vers la page accès capteur
    // mettre le reste de la page dans un Else GEANT

}

elseif(isset($_POST['numberSuppr']) && isset($_POST['nameSuppr'])){
    $ID=$_POST['numberSuppr'];
    $name=$_POST['nameSuppr'];
    SupprimerPiece($ID);
    $varEtat='supprimée de';
    require('../Vue/VuePieceCree.php');
}

else {

// DEFINITION DES VARIABLES
 //   $table = $_GET['table'];
    $id = $_GET['ID'];
    $piece = $_GET['room'];
// VARIABLES DU POST


    $tab = getAllCapt($id);  // liste de tt les données des capt pour les tests

    function AfficheTab($tab)
    {  // liste avec informations classées 3 par 3
        $length = count($tab);
        $var = 0;
        // pas un affichage tableau
        while ($var < $length) {    // à revoir dans la vue
            echo $tab[$var];    // à supprimer à terme
            $var++;
            echo(' ');
            echo $tab[$var];
            $var++;
            echo(' ');
            echo $tab[$var];
            $var++;
            echo('<br>');
        }
    }

    function CreerTableauHistorique($capteur, $tab)
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


// TESTS DES FONCTIONS ICI
    /*echo('hello <br>');

    $try=AfficheTab($tab);   // tests sur le controleur, à supprimer à terme
    echo('<br>');
    echo('<br>');
    $try2=latestData('thermometre',$id);
    echo($try2[0]);echo('  ');echo($try2[1]);echo(' °c');
    echo('<br>');
    $try3=latestData('luxmetre',$id);
    echo($try3[0]);echo('  ');echo($try3[1]);echo(' lux');*/


    require('../Vue/VuePiece.php');


}










