<?php
ini_set('SMTP', "tls://smtp.gmail.com");
ini_set('smtp_port', "587");
ini_set('sendmail_from', "sindhisaloni31@gmail.com");

$to = "sindhisaloni31@gmail.com";
$subject = "Verfication";
$body = "Below is the link provided for the email verification \n\n Hope u got it.";
$header = "from: donationhub2@gmail.com";

if(mail($to, $subject, $body, $header)){
	echo "Mail sent to ".$to;
}else{
	echo "There was an error in mail sending";
}

/* Another way of sending mail */

// require 'PHPMailer-5.2.27/PHPMailerAutoload.php';
// require 'PHPMailer-5.2.27/class.smtp.php';
// $mail = new PHPMailer;
// $mail->isSMTP();
// $mail->Host = "smtp.gmail.com";
// $mail->SMTPAuth = true;
// $mail->Username = "donationhub2@gmail.com";
// $mail->Password = "donate123";
// $mail->SMTPSecure = 'tls';
// $mail->Port = 587;
// $mail->addAddress($to);
// $mail->isHTML(true);
// $mail->Body = $body;
// $mail->Subject = $subject;
// $mail->setFrom("donationhub2@gmail.com", "Donation Hub");
// if (!$mail->send()) {
//     echo "error: " . $mail->ErrorInfo;
// } else {
//     echo "Email sent";
// }