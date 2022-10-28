<?php 
include('includes/config.php');
$ret="select * from homeowner where hasASystem=?";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('s',$systemid);
$stmt->execute() ;
$res=$stmt->get_result();
while($row=$res->fetch_object()){
	$to_email = $row->email;
	$location =$row->location;


$alert = "yes";


$subject = "Smoke detected";
$body = $location;
$headers = "From: sender\'s RTSDAS";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}}
?>