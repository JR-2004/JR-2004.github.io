<?php
// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de ingediende gegevens van het formulier
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Verzend de e-mail
    $to = "info.jr04@gmail.com";
    $subject = "Contactformulier ingediend";
    $body = "Naam: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Bericht:\n$message";
    mail($to, $subject, $body);

    // Redirect naar een bedankpagina
    header("Location: bedankt.html");
    exit();
}
?>
