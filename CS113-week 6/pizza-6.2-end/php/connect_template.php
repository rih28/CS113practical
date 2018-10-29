<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 29/10/2018
 * Time: 15:36
 */

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

?>