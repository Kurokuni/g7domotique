<!DOCTYPE html>
<html>
<head><!-- head contient tout ce qui est en entete de la page -->
    <!-- le titre de la page est visible dans les recherches google -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="" />
    <title><?=$piece?></title>
</head>
<body>

<!-- require header.php; -->

<!-- ajouter tout les infos communes -->



<article>
    <h3><?=$piece?></h3>

    <p>Valeurs des capteurs de la pièce:</p>

        <p><?=$try2[0]?>: <?=$try2[1]?> °c<br/>
            <?=$try3[0]?>: <?=$try3[1]?> lux</p>


    <p>Historique du capteur de temperature:</p>
    <table>
        <tr>
            <th>capteur</th>
            <th>valeur</th>
            <th>date</th>
        </tr>

            <?php
            $var=0;
            $var1=count($tab);
            $var2=30;
            $VAR=min($var1,$var2);
            while($var<$VAR) {
                ?>
        <tr>
                <td><?=$tab[$var]?></td>
                <td><?=$tab[$var+1]?></td>
                <td><?=$tab[$var+2]?></td>
        </tr>
                <?php
                $var = $var + 3;
            }
            ?>

    </table>
    <!-- peu être mettre une photo de la piece/ type de piece -->
    <p>retour au menu</p><!-- a changer en lien -->

</article>

<!-- require footer.php -->

</body>

</html>