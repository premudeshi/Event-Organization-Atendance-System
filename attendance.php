<!DOCTYPE html>
<html>


<?php
include_once "navbar.php";

echo "<h1>Attendance</h1>";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chapter";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT event_name FROM event";
$result = mysqli_query($conn, $sql);
//$name = .$row["event_name"];



echo "<select>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
echo $row["event_name"]; //"<br>";
    }
} else {
    echo "0 results";
}
echo "</select>";
mysqli_close($conn);
?>


</html>