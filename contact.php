<?php
if(!empty($_POST["envoyer"])) {
	$name = $_POST["fname"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$content = $_POST["message"];

	$toEmail = "amineelabbadi@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>