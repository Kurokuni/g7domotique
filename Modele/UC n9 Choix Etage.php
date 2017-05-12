<?php
    try/* si la BDD envoie une erreur je demande un catch pour préciser ou est l'erreur*/
    {
        $bdd = new PDO ('mysql:host=localhost; dbname=g7database; charset=utf8', 'root','');/*On se connecte à MySQL*/
    }
    catch (Exception $e)
    {
        die('Erreur: ' .  $e->getMessage());
    }

    /*On récupère le contenu de la table etage*/

    $etage= $bdd -> query('SELECT `etage_min`, `etage_max` FROM `adress_home` WHERE IDHOME=2'); /* Recupère les étage en fonction de l'identité de la maison*/
    $nbetage = $etage -> fetch();//recuperer la donner de l'objet
    //print_r($nbetage);
?>





