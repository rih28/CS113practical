<?php
include 'passwordline.php';

$servername = "devwebYYYY.cis.strath.ac.uk";
$username = "STRATH_USER_NAME";
$password = "PASSWORD_FROM_SYSTEMS_SERVICES";
$dbname = "STRATH_USER_NAME";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";

/*$sql = "SELECT * FROM pizzaordertable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "order_id: " . $row["order_id"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();*/
?>