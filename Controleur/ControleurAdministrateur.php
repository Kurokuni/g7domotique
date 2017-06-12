<?php

require('../Modele/ModeleAdministrateur.php');

if(isset($_POST['recherche']) && $_POST['typeDeRecherche']=="InfoUser"){
    $recherche2=rechercheInfosUser($_POST['recherche']);
    require('../Vue/VueAdminConnecte.php');
}

if(isset($_POST['recherche']) && $_POST['typeDeRecherche']=="InfoDomicile"){
    $recherche1=rechercheAdresseUser($_POST['recherche']);
    require('../Vue/VueAdminconnecte.php');
}


//modifie qui sommes nous
if(isset($_GET['QuiSommesNous'])){
    $textQuiSommesNous=$_GET['QuiSommesNous'];
    setQuiSommesNous($textQuiSommesNous);
}

//modifie conditions
if(isset($_GET['conditions'])){
    $textConditions=$_GET['conditions'];
    setconditions($textConditions);
}

if(isset($_GET['numero'])){
    $textNumero=$_GET['numero'];
    setNumero($textNumero);
}

if(isset($_GET['adresse'])){
    $textAdresse=$_GET['adresse'];
    setAdresse($textAdresse);
}

if(isset($_GET['mail'])){
    $textMail=$_GET['mail'];
    setMail($textMail);
}


require('../Vue/VueAdminConnecte.php');





?>







