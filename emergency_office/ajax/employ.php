
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rtsdasystem";
$id = "0";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  sensor,date FROM sensornew";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $data = $row["sensor"]; 
        $date = $row["date"];
    }
} else {
    echo "0 results";
}
echo $data;
echo "<br>";
echo "<br>";
echo "date:";
echo $date;
$conn->close();
?>