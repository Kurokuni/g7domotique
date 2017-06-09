<?php
require ('../Modele/ModeleMotDePasseOubli.php');
$Mail=$_POST['e-mail'];

$Mdp = MailDePasse($Mail);
$Mail = 'jacques.burie@gmail.com';
$Sujet = 'Récupération du mot de passe';
$Message = 'Voici votre mot de passe Veuillez le noter quelque part.';
$headers = "From: Sendmail Tests" . PHP_EOL;
$headers = 'Content-type: text/html; charset=utf-8' . PHP_EOL;
if (!mail($Mail, $Sujet, $Message, $headers)) {
    echo 'mail non envoyé';
}else {
    echo 'mail envoyer' . $Mail;
}
//mail($Mail, $Sujet, $Message);
function mail_utf8($to, $from_user, $from_email,
                   $subject = '(No subject)', $message = '')
{
    $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

    $headers = "From: $from_user <$from_email>\n".
        "MIME-Version: 1.0" . "\n" .
        "Content-type: text/html; charset=UTF-8" . "\n";

    return mail($to, $subject, $message, $headers);
}
//if (!mail_utf8($Mail, 'g7domotique', 'g7domotique@gmail.com', $Sujet, $Message)) {
//    echo 'mail non envoyé';
//}
?>