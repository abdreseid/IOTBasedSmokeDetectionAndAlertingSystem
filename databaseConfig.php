
<?php
    
//Connect to database and create table
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rtsdasystem";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    $sql = "CREATE TABLE logs (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    systemid VARCHAR(30),
    sensor VARCHAR(30),
    Date DATE NULL,
    Time TIME NULL, 
    TimeStamp TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";


    if ($conn->query($sql) === TRUE) {
        echo "Table logs created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }


    $conn->close();
?>