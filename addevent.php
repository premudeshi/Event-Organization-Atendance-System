<?php  


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chapter";



$name = $_POST["name"];
$date = $_POST["date"];
$hours = $_POST["hour"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO event (event_name, date, hours) VALUES ('$name', '$date', '$hours') ";
$sql1 = "CREATE TABLE $name
(
id INT AUTO_INCREMENT,
name CHAR (100) NOT NULL,
icainumber CHAR (100) NOT NULL,
PRIMARY KEY(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//header( "refresh:5;url=memberadd.php" );

 ?>