<?php

include 'connect.php';

$sql = "UPDATE spp_pizza SET name='Cheese and Tomato' WHERE image_id='margarita'";

if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
?>