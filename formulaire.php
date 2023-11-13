<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinataire = "Anatoli.mikoyan95@gmail.com";
    $sujet = "Nouveau message depuis le formulaire de contact";

    // Récupère les données du formulaire
    $nom = $_POST["name"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $sujetMessage = $_POST["subject"];
    $message = $_POST["texte"];

    // Construit le corps du message
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n";
    $contenu .= "Numéro: $numero\n";
    $contenu .= "Sujet: $sujetMessage\n\n";
    $contenu .= "Message:\n$message";

    // Envoie l'email
    mail($destinataire, $sujet, $contenu);

    // Redirection après l'envoi du formulaire (facultatif)
    header("Location: confirmation.html");
}
?>
