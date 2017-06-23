<?php
if(!isset($_SESSION['connexion'])){
    session_start();
    $_SESSION['connexion']=1;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>DomIsep</title>
        <link rel="stylesheet" href="http://localhost/g7domotique/CSS/design.css"/>
    </head>
    <header>
        <?php include '../CSS/Header_Deconnecte.php';?>
    </header>
    <body>
    <div class="VueAccueil">
    <?php
    if (isset($_SESSION['role'])){
        require ('../Controleur/Controleur_Connexion.php');
    }
    else {
        if (isset($_COOKIE['test']) && $_COOKIE['test'] == 1) {
            $nomD = $_COOKIE['nom'];
        } else {
            $nomD = "";
        }
        ?>
        <div style="margin-top: 5%" class="loginForm">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="panel-title"> Connexion</p>
                </div>
                <div class="panel-body">
                    <form action='http://localhost/g7domotique/Controleur/Controleur_Connexion.php' method='post'
                          accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nom" name="nom" type="text"
                                       value="<?php echo $nomD ?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mot de passe" name="mdp" type="password"
                                       value="">
                            </div>
                            <label classe="checkbox">
                                <input type="checkbox" name="4Ever"> Se souvenir de mon pseudo
                            </label>
                            <br/>
                            <input type="submit" value="Connexion">
                            <?php
                            if (isset($erreur)) {
                                echo 'Nom de compte ou mot de passe incorrect!';
                            }
                            ?>
                            <div class="Mdp"><a align="right"
                                                href="http://localhost/g7domotique/Vue/Vue_Inscription.php">Créer un
                                    compte</a>
                                .
                                <a align="right" href="http://localhost/g7domotique/Vue/VueMotDePasseOubli.php">Mot de
                                    passe oublié</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

        <!--<div class="QuiSommeNous">
        <p id="QuiSommesNous" align="center"> <strong> Qui sommes nous ? </strong></p>
        <p>Domisep est une entreprise sp&eacute;cialis&eacute;e dans la t&eacute;l&eacute;surveillance d'immeubles, gr&acirc;ce &agrave; la pose de syst&egrave;mes d'alarme sans fil adapt&eacute;s aux besoins des particuliers et une centrale d'alarme op&eacute;rationnelle 24h/24. Domisep g&egrave;re un parc de plusieurs milliers d'habitations dans plus d'une dizaine de pays en Europe.</p>
        <p>Dans le cadre de son expansion et de la diversification de ses activit&eacute;s, Domisep souhaite proposer une gestion compl&egrave;te des habitations connect&eacute;es (immeubles et maisons) pour les particuliers. Domisep souhaite, pour ce faire, rassembler toutes les technologies de l'informatique, des t&eacute;l&eacute;communications et de l'&eacute;lectronique et les mettre au service de ses clients, gr&acirc;ce &agrave; un traitement optimis&eacute; des signaux et des informations.</p>
        <p>Domisep offre à chaqu'un de ses clients, la possibilité de se connecter en toute sécurité afin de piloter, de protéger son domicile et de réduire les factures depuis un ordinateur, un téléphone mobile ou une tablette.</p>
         </div>-->
    <div style="margin-top: 430px" class="QuiSommeNous">
    <?php require('../Controleur/getteurAdmin.php');
    echo($textQuiSommesNous)?>
    </div>
    </div>
    </body>
    <footer><?php include '../CSS/Footer.php';?>
    </footer>
</html>
