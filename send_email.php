<?php
// Traitement du formulaire de contact
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        $error = "Tous les champs sont requis.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email invalide.";
    } else {
        $to = "rustevolutionserver@gmail.com";
        $subject = "Nouveau message de contact - $name";
        $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $success = "Message envoyé avec succès!";
            $_POST = [];
        } else {
            $error = "Erreur lors de l'envoi du message.";
        }
    }
}
// Affichage des messages de succès ou d'erreur
if (isset($success))
    echo '<p class="success">' . $success . '</p>';
elseif (isset($error))
    echo '<p class="error">' . $error . '</p>';
?>
