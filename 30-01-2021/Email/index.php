<?php
$to = "sindhisaloni31@gmail.com";
$subject = "Verfication";
$body = "Below is the link provided for the email verification \n\n Hope u got it.";
$header = "From: Donation Hub <donationhub2@gmail.com>";

if(mail($to, $subject, $body, $header)){
	echo "Mail sent to ".$to;
}else{
	echo "There was an error in sending mail";
}