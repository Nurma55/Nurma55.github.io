<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinataire = "Anatoli.Mikoyan95@gmail.com";
    $sujet = "Nouveau message depuis le formulaire de contact";
    
    // Récupère les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Construit le corps du message
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n\n";
    $contenu .= "Message:\n$message";
    
    // Envoie l'email
    mail($destinataire, $sujet, $contenu);
    
    // Redirection après l'envoi du formulaire (facultatif)
    header("Location: confirmation.html");
}
?>
