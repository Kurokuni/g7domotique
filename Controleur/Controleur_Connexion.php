<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
    </head>
<body>
<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>
<div class="Connexion">
<?php
require ('../Modele/Modele_Connexion.php');
$Nom=$_POST['nom'];
$Mdp=$_POST['mdp'];
$_SESSION["nom"] = $Nom;
    $test = testConnexion($Nom, $Mdp);
    if ($test) {
        $_SESSION["role"] = role($Nom);
        switch ($_SESSION["role"]) {
            case "1":
                $Nom=$_POST['nom'];
                $Mdp=$_POST['mdp'];
                $adress=getHomePrincipale($Nom);
                require ('../Controleur/controleurMaison.php');
                break;
            case "2":
                require ('../Vue/VueAdminConnecte.php');
                break;
            default:
                $Nom=$_POST['nom'];
                $Mdp=$_POST['mdp'];
                $adress=getHomePrincipale($Nom);
                require ('../Controleur/controleurMaison.php');
        }
    } else {
        $erreur = true;
        require('../Vue/Accueil.php');
    }
?>
</div>
</body>
<footer><?php include '../CSS/Footer.php';?>
</footer>
</html>