<?php
print_r($_POST);
require_once ('../Else/connexionDB.php');
function Changementmdp ( $mdp)
{
    global $conn;
    $requ1 = $conn->prepare("SELECT 'IDUSER' FROM user WHERE pass_word = '$mdp'");
    $requ1->execute();
    $data1 = $requ1->fetch();
    $var1 = $data1['IDUSER'];
    $nouveaumdp = $_POST ["nouveaumotdepasse"];
    $nouveaumdprepet = $_POST ["confirmerlemotdepasse"];
    $ancienmdp = $_POST["ancienmotdepasse"];

    if ($nouveaumdp == $nouveaumdprepet) {
        if ($var1 == $ancienmdp) {
            $sql = "update individu SET pass_word = 'nouveaumdp' WHERE pass_word = '$mdp'";
            echo "mot de passe changè";
        }
        else {
            echo "ancien mot de passe non validé";
        }

    }

    else
    {
        echo "mot de passe de confirmation incorrecte";
    }
}
?>