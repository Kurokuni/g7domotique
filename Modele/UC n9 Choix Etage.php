<?php
    try/* si la BDD envoie une erreur je demande un catch pour préciser ou est l'erreur*/
    {
        $bdd = new PDO ('mysql:host=localhost; dbname=g7database; charset=ttf8', 'root','',array (PDE ::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));/*On se connecte à MySQL*/
    }
    catch (Exception $e)
    {
        die('Erreur: ' .  $e->getMessage());
        echo "erreur de base de donnés";
    }

    /*On récupère le contenu de la table etage*/

    $idetageobjet= $bdd -> query( ' select*from etage where IDHOME'); // id client contenue dans la variable session //
    $etage = $idfetageobjet -> fetch();//recuperer la donner de l'objet
    $etage_= $idetage ['Etage_-1'];
    $etage_0 = $idetage ['Etage_0'];
    $etage_1 = $idetage ['Etage_1'];
    $etage_2 = $idetage ['Etage_2'];
    $etage_3 = $idetage ['Etage_3'];
?>



