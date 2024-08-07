<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subjecte = $_POST["subject"];
  $message = $_POST["message"];

  $to = "donatientchehoundje@gmail.com";
  $subject = "Nouveau message depuis mon site web";
  $body = "Nom: $name\nEmail: $email\nsujet: $subjecte\nMessage: $message";

  if (mail($to, $subject, $body)) {
    $sms= "Merci pour votre message";
  } else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message</title>
</head>
<body>
  <br><br><br><br><br><br><br><hr>
  <center><h1 style="color:green; font-weight:bolder; font-size:comic sans ms"><?php if(isset($sms)){echo $sms;} ?></h1></center>
  <hr>
  <center><a href="index.php">Aller à l'accueil</a></center>
</body>
</html>