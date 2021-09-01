<?php
if (isset($_POST['user_mail'])&&!empty($_POST['user_mail']))/* permet de ne pas envoyer de message si tout les champs ne sont pas remplis */  {
    $sujet=$_POST['user_sujet'];
    $mail=$_POST['user_mail'];
    $msg=$_POST['user_message'];

    $recipient = "ton.adresse@codeur.online";
    $subject = "Formulaire";

    $message= 'Message envoyé par '.$mail.' : '.$msg;
    /* Fait passer des info pour gérer l encodage */
    $headerFields = array(
        "From: {$mail}",
        "MIME-Version: 1.0",
        "Content-Type: text/html;charset=utf-8" 
        );
    mail($recipient, $sujet, $message, implode("\r\n", $headerFields));

    echo 'Votre message a bien été transmis. Nous vous contacterons sous peu <br>';
    echo '<button> <a href="index.php">retour</a> </button>';
} else{
    echo 'Votre message n\'a pas été envoyé <br>';
    echo '<button> <a href="index.php">retour</a> </button>';
} 


