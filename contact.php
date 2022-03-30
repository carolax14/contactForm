<?php
if (isset($_POST['btnSubmit'])) {
    $name = $_POST['surname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];
    $to = "anneemilie.gauche@gmail.com";
    $header = "From:$email";

    /*  if (mail($to, $subject, $msg, $header)) {
        header('Location: index.php');
        $msg1 = "Le message a bien été envoyé";
    } */

    $message = "Ce message vous a été envoyé via la page contact du site contact.carole-hafizou.fr
    Nom : " . $name . "
    Email : " . $email . "
    Message : " . $msg;

    $retour = mail("anneemilie.gauche@gmail.com", $subject, $msg, $header . "\r\n" . "Reply-to:" . $email);
    header('Location: index.php');
}
