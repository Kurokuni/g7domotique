<?php
    try/* si la BDD envoie une erreur je demande un catch pour préciser ou est l'erreur*/
    {
        $bdd = new PDO ('mysql:host=localhost; dbname=g7database; charset=ttf8', 'root','');/*On se connecte à MySQL*/
    }
    catch (Exception $e)
    {
        die('Erreur: ' .  $e->getMessage());

    }

    /*On récupère le contenu de la table etage*/

    $idetageobjet= $bdd -> query( ' select Etage_-1, Etage_0, Etage_1, Etage_2, Etage_3 from adress_home where IDHOME'); /* Recupère les étage en fonction de l'identité de la maison*/
    $etage = $idfetageobjet -> fetch();//recuperer la donner de l'objet
    $idetage_= $idetage ['Etage_-1'];
    $idetage_0 = $idetage ['Etage_0'];
    $idetage_1 = $idetage ['Etage_1'];
    $idetage_2 = $idetage ['Etage_2'];
    $idetage_3 = $idetage ['Etage_3'];
?>



