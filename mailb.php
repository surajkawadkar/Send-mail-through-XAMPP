<?php
$to = "suraj.kawadkar14@gmail.com";
$subject= "Response from website";
$message = "i am very thankful to you";
$headers = "From: s16_kawadkar_suraj@mgmcen.ac.in";

if (mail ($to, $subject, $message))
{
	echo "mail send successfully";
}
else{
	echo "cannot send";
}
?>

