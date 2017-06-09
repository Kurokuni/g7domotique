<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>DomIsep</title>
        <link rel="stylesheet" href="http://localhost/g7domotique/CSS/design.css"/>
    </head>
    <body>

    <a href="../index.php"> </a>
            <?php require('../CSS/Header_Deconnecte.php');?>
    <div class ="loginForm">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> Connection</h3>
            </div>
            <div class="panel-body">
                <form action='http://localhost/g7domotique/Controleur/Controleur_Connexion.php' method='post' accept-charset="UTF-8" role="form">
                    <fieldset>
                        <div class ="form-group">
                            <input class="form-control" placeholder="Nom" name="nom" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Mot de passe" name="mdp" type="password" value="">
                        </div>
                        <input type="submit" value="Connection">
                        <?php
                        if (isset($erreur)){
                            echo 'Nom de compte ou mot de passe incorrect!';
                        }echo 'Nom de compte ou mot de passe incorrect!';
                        ?>
                        <div class="Mdp"><a align="right" href="http://localhost/g7domotique/Vue/Vue_Inscription.php">Créer un compte</a>
                        <a align="right" href="http://localhost/g7domotique/Vue/VueMotDePasseOubli.php">Mot de passe oublié</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


        <h2>
            <span>

            <p id="QuiSommesNous" align="center"> <strong> Qui sommes nous ? </strong></p>
            </span>
        </h2>
    <?php require('../Controleur/getteurAdmin.php')?>
        <h3>
            <?=$textQuiSommesNous?>
        </h3>


            <?php require('../CSS/Footer.php');?>
    </body>
</html>
