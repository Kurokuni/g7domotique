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
    </tr>

    <tr>
        <td><?=$data['IDCAPTEUR']?></td>
        <td><?=$data['name']?></td>
        <td><?=$data['value']?></td>
        <td><?=$data['power']?></td>
        <td><?=$data['HAG']?></td>
        <td><?=$data['IDROOM']?></td>
    </tr>



</table>
<article>
    <p>ID du capteur:<?=$_GET['ID']?><br/>
        valeur du capteur:<?=$data2 ?></p>  <!-- recuperée depuis controleurCapteur.php -->


</article>

</body>

</html>


