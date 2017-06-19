<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mensions légales</title>
    <link rel="stylesheet" href="http://localhost/g7domotique/CSS/design.css"/>
</head>
<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>
<body>
<?php require('../Controleur/getteurAdmin.php')?>

<br/><br/><br/>

<h2>Mensions Légales</h2>

<p>Home</p>
<p>Conformément aux dispositions des articles 6-III de la loi n°2004-575 du 21 juin 2004 pour
la confiance dans l'économie numérique, dite L.C.E.N, il est porté à la connaissance des utilisateurs
et visiteurs du site <strong>Home</strong> les présentes mentions légales</p>
<p>Le site <strong>Home</strong> est accessible a l'adresse suivante: /\ à remplir /\. L'accès et l'utilisation
du site sont soumis aux présentes "mentions légales" détaillées ce-après ainsi qu'aux lois et/ou règlements applicables.
<br/>
<br/>
La connexion, l'utilisation et l'accès à ce site impliquent l'acceptation intégrale et sans réserve de l'internaute de toutes
les dispositions des présentes mentions légales.</p>
<h3>Article 1 - INFORMATIONS LEGALES</h3>
<p>Le site <strong>Home</strong> est edité par <strong>Domisep</strong><br/>
ayant son siège social a l'adresse suivant: <?=$textAdresse?><br/>
téléphone : <?=$textNumero?><br/>
Adresse e-mail : <?=$textMail?><br/>

<br/>
Sont considerés comme utilisateurs tout les internautes qui navignent, lisent, visionnent et utilisant le site <strong>Home</strong></p>



</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>