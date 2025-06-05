<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $projectType = htmlspecialchars($_POST['projectType']);
  $message = htmlspecialchars($_POST['message']);

  $to = "youradminemail@example.com"; // CHANGE THIS
  $subject = "New Contact Form Submission: $projectType";
  $body = "You have received a new message:\n\n"
        . "Name: $name\n"
        . "Email: $email\n"
        . "Project Type: $projectType\n\n"
        . "Message:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    header("Location: contact.php?status=success");
  } else {
    header("Location: contact.php?status=error");
  }
  exit;
}
?>
