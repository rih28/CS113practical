<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 27/10/2018
 * Time: 15:18
 */

include 'connect.php';

$sql = "INSERT INTO spp_pizza (name, price, size, image_id)
VALUES ('Romana', 11.99, '11.5', 'romana')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>