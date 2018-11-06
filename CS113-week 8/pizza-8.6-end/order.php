<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 27/10/2018
 * Time: 16:43
 */

include 'php/connect.php';

if (empty($_GET)) {
    //TODO: Do something here
} else {
    $sql = "SELECT spp_orders.customer_id, spp_pizza.name, spp_pizza.price FROM spp_pizza JOIN spp_order ON spp_pizza.id = spp_order.pizza_id JOIN spp_orders ON spp_order.orders_id = spp_orders.id where spp_orders.id=" . $_GET["orders_id"];
    //echo $sql;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["customer_id"] . " - " . $row["name"] . " - " . $row["price"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}