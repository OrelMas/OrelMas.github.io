<?php
require "./PHPMailer/PHPMailerAutoload.php";
/**
 * Cette fonction créer un token unique
 * @param int @length
 */
function GenerateToken($length) { // 10
    $token = "_0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($token, $length)), 0, $length);
}

function SendEmail($id, $token, $email) {
    function smtpmailer($to, $from, $from_name, $subject, $body) {
        $mail = new PHPMailer();
$mail->SMTPDebug=2;
        $mail->isSMTP();
        $mail->SMTPAuth = true;

       
        $mail->Host = 'smtp-mail.outlook.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';

        $mail->Username = $from;
        $mail->Password = "DWWMauboue";

        $mail->isHTML();
        $mail->From = $from;
        $mail->FromName = $from_name;
        $mail->Sender = $from;
        $mail->addReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->addAddress($to);

        if (!$mail->Send()) {
            echo "Le mail ne s'est pas envoyé rééssayer plus tard";
        } else {
            echo "Le mail s'est envoyé avec succès";
        }
}
$msg = "Lien pour réinitialiser votre mot de passe : http://localhost/cours_php/OrelMas.github.io/exo/connexion/reset.php?id=$id&token=$token";  
    smtpmailer($email, 'dwwm.auboue@hotmail.com', 'DWWM', "Réinitialisation du mot de passe", $msg);                               
}
