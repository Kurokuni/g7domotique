<?php

require('../Else/ConnexionDB.php');


/*$rek=$conn->prepare("SELECT * FROM personne");
$rek->execute();
echo'<br>';

$data=$rek->fetch();
print_r($data);*/

?>


<?php

$SeeData='command';

function getArg($Arg) {
    require('../else/connexionDB.php');
    $requ=$conn->prepare("SELECT $Arg FROM actionneur");
    $requ->execute();
    echo'<br>';
    while($data=$requ->fetch())
    {
        echo $data[$Arg];
        echo'<br>';
    }
    echo'done';
    $requ->closeCursor();
}

$donnee=getArg($SeeData);

?>



