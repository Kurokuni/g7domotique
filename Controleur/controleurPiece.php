<?php

require('../Modele/modelePiece.php');

$table=$_GET['table'];
$id=$_GET['ID'];
$piece=$_GET['room'];

$tab=getAllCapt($id);  //

function AfficheTab($tab){  // tab sur 3 colonnes
    $length=count($tab);
    $var=0;
                            // pas un affichage tableau
    while($var<$length){    // à revoir dans la vue
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


echo('hello <br>');

$try=AfficheTab($tab);   // tests sur le controleur, à supprimer à terme
echo('<br>');
echo('<br>');
$try2=latestData('thermometre',2);
echo($try2[0]);echo('  ');echo($try2[1]);echo(' °c');
echo('<br>');
$try3=latestData2('luxmetre',2);
echo($try3[0]);echo('  ');echo($try3[1]);echo(' lux');


require('../Vue/VuePiece.php');
















