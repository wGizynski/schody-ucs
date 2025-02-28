<?php
$message_sent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    $to = "ucs@wp.pl";
    $subject = "Nowa wiadomość z formularza kontaktowego";
    $body = "Imię: $name\nEmail: $email\nTelefon: $phone\n\nWiadomość:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $message_sent = true;
    }
}
?>