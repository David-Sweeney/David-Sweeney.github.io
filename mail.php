<!-- <?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "david.sweeney@sydney.edu.au";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?> -->

<?php

echo function_exists('mail') ? "Mail function exists" : "Mail function NOT enabled";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($email) || empty($message)) {
    die("Error: All fields are required.");
}

$formcontent = "From: $name \nMessage: $message";
$recipient = "david.sweeney@sydney.edu.au";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

if (mail($recipient, $subject, $formcontent, $mailheader)) {
    echo "Thank You!";
} else {
    echo "Error: Mail not sent!";
}
?>