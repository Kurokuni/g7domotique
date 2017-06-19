<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ModifierMotDePasseOubliée</title>
</head>
<header>
    <?php include '../CSS/Header_Deconnecte.php';?>
</header>
<body>
<div style="margin-top: 10%" class="ModiMdpOublie">
    <form action='../Controleur/Controleur_ModiMDPOubli.php' method='post'>
        <fieldset>
            <legend>Veuiller entrer le e-mail de votre compte :</legend>
            E-mail: <input placeholder="Adresse email" type="email" name='mailMDP'><br>
            <legend>Veuiller entrer le nouveau mot de passe :</legend>
            <input type="password" name="mmdpo"/><br>
            <legend>Veuiller confirmer le nouveau mot de passe :</legend>
            <input type="password" name="mmdpo2"/><br>
            <input type='submit' value="Soumettre">
        </fieldset>
    </form>
</div>
</body>
</html>