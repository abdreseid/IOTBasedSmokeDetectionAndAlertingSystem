<?php 

/*
if (mail("durehaji06@gmail.com","email test","email body","From: abdreseid588@gmail.com")) {
	# code...
	echo "email sent";
}
echo "not sent";
 */
$aler2 = "yes";

$to_email = "abdurezakseid2013@gmail.com";
$subject = "Smoke detected";
$body = "Location: 7.691953,36.817856";
$headers = "From: sender\'s RTSDAS";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>