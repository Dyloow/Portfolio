<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données du formulaire
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Valider les données (vous pouvez ajouter des validations supplémentaires ici)

  // Adresse e-mail de destination
  $to = "wlachiri@outlook.com";

  // Sujet du message
  $subject = "Nouveau message du formulaire de contact";

  // Corps du message
  $body = "Nom: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message:\n$message";

  // En-têtes du message
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Envoyer l'e-mail
  if (mail($to, $subject, $body, $headers)) {
    echo "Message envoyé avec succès !";
  } else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
  }
}
?>
