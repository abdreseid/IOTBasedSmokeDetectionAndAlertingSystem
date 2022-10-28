<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rtsdasystem";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }


    date_default_timezone_set('Asia/Kolkata');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");

 //&&
    if(!empty($_POST['id']) || !empty($_POST['sensorData']))
    {
        $systemid = $_POST['id'];
        //check for more info
        $sensorData = $_POST['sensorData'];
         $alert = "no";
         $alert2 = "no";
        include('mailtohome.php');
       
        if ($sensorData > 800) {
            # code...
            include('mailtoeo.php');
        }


        $sql = "INSERT INTO afterlog (systemid, sensor, Date, Time,halerted,ealerted) VALUES ('".$systemid."', '".$sensorData."', '".$d."', '".$t."', '".$alert."', '".$alert2."')";


        if ($conn->query($sql) === TRUE) {
            echo "OK";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }




    $conn->close();
//inlude('phone/push_notification.php');
?>