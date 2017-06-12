<div class="ControleurPiece">
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

elseif(isset($_GET['numberSuppr']) && isset($_GET['nameSuppr'])){
    $ID=$_GET['numberSuppr'];
    $name=$_GET['nameSuppr'];
    SupprimerPiece($ID);
    $varEtat='supprimée de';
    require('../Vue/VuePieceCree.php');
}

else {

// DEFINITION DES VARIABLES
 //   $table = $_GET['table'];
    $id = $_GET['ID'];
    $piece = $_GET['room'];

    $tabcapteurs=CapteINroom($id);
    $tabvalues=lastData($id);

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




    require('../Vue/VuePiece.php');


}
?>
</div>










