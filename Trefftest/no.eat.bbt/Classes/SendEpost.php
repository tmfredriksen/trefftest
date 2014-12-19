<?php
require ("class.phpmailer.php");
require ("class.smtp.php");
function mail_utf8($to, $from_user, $from_email, $subject, $message) {
	$mail = new PHPMailer ();
	
	$mail->IsSMTP (); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML ( true );
	$mail->Username = "skreddernes10@gmail.com";
	$mail->Password = "mufhennmlmxptvup";
	$mail->SetFrom ( "example@gmail.com" );
	$mail->Subject = "Test";
	$mail->Body = "hello";
	$mail->AddAddress ( "eivind.skreddernes@gmail.com" );
	
	if (! $mail->Send ()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message has been sent";
	}
}
?>
