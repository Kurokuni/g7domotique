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
    <title><?=$piece?></title>
</head>
<body>

<header>
    <?php include '../CSS/Header_Connecte.php';?>
</header>

<!-- ajouter tout les infos communes -->


<div style="margin-top: 10%" class="VuePiece">

<article>
    <h3><?=$piece?></h3>

    <?php $IDHOME=$_GET['idhome'];
          $pseudo=$_GET['pseudo'];?>

    <?php



    $x=0;
    foreach($tabcapteurs as $ligne) {
        echo($ligne['IDCAPTEUR'] . ' ' . $ligne['name'] . ' ' . $tabvalues[$x] );?><a href="../Controleur/controleurCapteur.php?id=<?=$ligne['IDCAPTEUR']?>&pseudo=<?=$pseudo?>">supprimer</a><?php
        echo( ' ' .'<br>');
        $x++;
    }

    ?>


    <br/>
    <?php
    $TABHistoTemperature=CreerTableauHistorique('thermometre',$tab);
    ?>
    <p> Historique du capteur de température :</p>
    <table style="color:#ffffff">
        <tr>
            <th>Capteur</th>
            <th>Valeur</th>
            <th>Date</th>
        </tr>

        <?php
        $var=0;
        $var1=count($TABHistoTemperature);
        $var2=30;
        $VAR=min($var1,$var2);    // REFAIRE UNE FONCTION DANS LE CONTROLEUR QUI DYNAMISE LE SYSTEME
        while($var<$VAR) {

                ?>
                <tr>
                    <td><?= $TABHistoTemperature[$var] ?></td>
                    <td><?= $TABHistoTemperature[$var + 1] ?></td>
                    <td><?= $TABHistoTemperature[$var + 2] ?></td>
                </tr>
                <?php
                $var = $var + 3;

        }
        ?>

    </table>

    <br/>
    <br/>
    <p><strong><u>Ajouter un capteur :</u></strong></p>
    <form action="../Controleur/controleurCapteur.php?id=<?=$id?>&pseudo=<?=$pseudo?>" method="post">
        <label for="nameAjout">Nom</label> : <input placeholder="Nom de la pièce" type="text" name="nameAjout" /><br/>
        <label for="power">État du capteur (0/1)</label> : <input placeholder="L'état du capteur" type="number" name="power" /><br/>
        <label for="HAG">Hag associé</label> : <input placeholder="HAG associé" type="number" name="HAG" /><br/><br/>
        <input type="submit" value="Envoyer" />
        <a href="../Vue/vueAccesPiece.php?Home=Maison 1&id=<?=$IDHOME?>&pseudo=<?=$pseudo?>"><strong>Retour aux choix de la pièce</strong></a>
        <!-- peu être mettre une photo de la piece/ type de piece -->
    </form>
    <br/>





</article>

</div>
    <br/><br/><br/><br>

</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>