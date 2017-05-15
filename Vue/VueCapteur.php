<!DOCTYPE html>
<html>
<head><!-- head contient tout ce qui est en entete de la page -->
    <!-- le titre de la page est visible dans les recherches google -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="" />
    <title>Capteurs</title>
</head>
<body>

<table>
    <tr>
        <th>IDcapteur</th>
        <th>name</th>
        <th>value</th>
        <th>power</th>
        <th>HAG</th>
        <th>IDroom</th>
        <th>time</th>
    </tr>

    <tr>
        <td><?=$data[0]?></td>
        <td><?=$data[1]?></td>
        <td><?=$data[2]?></td>
        <td><?=$data[3]?></td>
        <td><?=$data[4]?></td>
        <td><?=$data[5]?></td>
        <td><?=$data[6]?></td>
    </tr>

</table>
<article>
    <p>ID du capteur:<?=$_GET['ID']?><br/>
        valeur du capteur:<?=$data2 ?></p>  <!-- recuperée depuis controleurCapteur.php -->


</article>

</body>

</html>


