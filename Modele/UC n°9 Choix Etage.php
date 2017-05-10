<?php
    try/* si la BDD envoie une erreur je demande un catch pour préciser ou est l'erreur*/
    {
        $bdd = new PDO ('mysql:host=localhost; dbname=g7database; charset=ttf8', 'root','',array (PDE ::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));/*On se connecte à MySQL*/
    }
    catch (Exception $e)
    {
        die('Erreur: ' .  $e->getMessage());
    }

    /*On récupère le contenu de la table etage*/

$idetageobjet= $bdd -> query( ' select*from etage where IDHOME'); // id client contenue dans la variable session //
$etage = $idfetageobjet -> fetch();//recuperer la donner de l'objet
$idetage = $idetage ['Etage_-1'];
$idetage = $idetage ['Etage_0'];
$idetage = $idetage ['Etage_1'];
$idetage = $idetage ['Etage_2'];
$idetage = $idetage ['Etage_3'];