<?php 
$systemid="333obrf";
include('includes/config.php');
$ret="select * from homeowner where hasASystem=?";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('s',$systemid);
$stmt->execute() ;
$res=$stmt->get_result();
while($row=$res->fetch_object()){
	
	$loc =$row->location;

// Create connection
	$sql = "SELECT  email FROM emergency_office";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $to_email = $row["email"]; 
        $aler2 = "yes";
 
$subject = "Smoke detected";
$body = $loc;
$headers = "From: sender\'s RTSDAS";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
        
    }
} else {
    echo "0 results";
}
}



?>