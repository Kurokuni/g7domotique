<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html>
<head><!-- head contient tout ce qui est en entete de la page -->
    <!-- le titre de la page est visible dans les recherches google -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/design.css" />
    <title><?=$capteur?></title>
</head>
<body>

<?php
require('../CSS/Header_Deconnecte.php');
?>

<article>
    <h3><?=$capteur?></h3>

    <?php
    echo($IDpiece);
    echo($piece);
    ?>
    <p>Historique du capteur:</p>

    <table>
        <tr>
            <th>capteur</th>
            <th>valeur</th>
            <th>date</th>
        </tr>

        <?php
        $var=0;
        $var1=count($TabHistoCapt);
        $var2=30;
        $VAR=min($var1,$var2);    // REFAIRE UNE FONCTION DANS LE CONTROLEUR QUI DYNAMISE LE SYSTEME
        while($var<$VAR) {

            ?>
            <tr>
                <td><?= $TabHistoCapt[$var] ?></td>
                <td><?= $TabHistoCapt[$var + 1] ?></td>
                <td><?= $TabHistoCapt[$var + 2] ?></td>
            </tr>
            <?php
            $var = $var + 3;

        }
        ?>

    </table>

</article>
<a href="../Controleur/controleurPiece.php?room=<?=$piece?>&ID=<?=$IDpiece?>">Retour à la piece</a>

<?php
require('../CSS/Footer.php');
?>
</body>

</html>


