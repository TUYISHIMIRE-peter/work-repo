<?php
session_start();
$email = $_SESSION['email'];
$token = $_SESSION['token'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/autoload.php';

$mail = new PHPMailer(true);

$body=<<< email

    <h1>email verification </h1>
    
    <a href = "http://localhost/work-repo/login.php?token=$token" >verify your account</a>
email;


try {									
	$mail->isSMTP(true);											
	$mail->Host	 = 'smtp.gmail.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'jamesofficial31@gmail.com';				
	$mail->Password = 'Coolhand@250';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('jamesofficial31@gmail.com', 'james');		
	$mail->addAddress($email);	
	$mail->isHTML(true);								
	$mail->Subject = 'Subject';
	$mail->Body = $body;
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
	header('location:thanks.php');
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
