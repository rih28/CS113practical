<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 27/10/2018
 * Time: 15:18
 */

include 'connect.php';

// sql to delete a record
$sql = "DELETE FROM spp_pizza WHERE image_id='romana'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>