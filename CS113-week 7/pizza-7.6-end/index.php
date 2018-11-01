<?php
    include 'php/connect.php';

    $sql = "SELECT * FROM spp_pizza";
    $result = $conn->query($sql);

    //$conn->close();

    $numberOfPizzas = 0;
    $price = 0;
    $total = 0;
    $totalNumberOfPizzasAllowed = 4;
    $pizzaId = "";
    $orders_id = 0;

    $last_id = 0;

    if (empty($_GET)) {
        $sql = "INSERT INTO spp_orders (customer_id) VALUES ('1122132')";

        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $url = 'https://devweb2018.cis.strath.ac.uk/~jrb18175/pizza_6.6_end/?orders_id=' . $last_id;
            header('Location: ' . $url);
            echo "New record created successfully: " . $url;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (empty($_POST)) {
        $numberOfPizzas = 0;
        $price = 0;
        $total = 0;
        $pizzaId = "";
    } else {
        $orders_id = $_GET["orders_id"];
        $numberOfPizzas = $_POST["pizza"];
        $total = $_POST["total"];
        $pizzaId = $_POST["pizzaid"];;
        if ($numberOfPizzas < $totalNumberOfPizzasAllowed) {
            $sql = "INSERT INTO spp_order (orders_id, pizza_id, custom_id) VALUES ($orders_id, $pizzaId, 1)";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                $conn->close();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            //$conn->close();

            $numberOfPizzas++;
            $price = $_POST["price"];
            $total += $price;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strathclyde Pizza Place</title>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div id="main">
        <div class="center">
            <h1>Strathclyde Pizza Place</h1>
            <h2><a href="order.php?orders_id=<?php echo $orders_id; ?>">
                <?php
                    echo 'Cart: ' . $numberOfPizzas . ', £' . $total;
                ?>
                </a>
            </h2>
            <p>
                <?php
                    if ($numberOfPizzas >= $totalNumberOfPizzasAllowed) {
                        echo "Can't order more than $totalNumberOfPizzasAllowed pizzas";
                    }
                ?>
            </p>
        </div>
        <hr>
        <div class="center w-70 ma">
            <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if ($row["image_id"] != "0") {
                            echo '<div class="ib">';
                            echo '<form method="post">';
                            echo '<input name="pizzaid" type="hidden" value="' . $row["id"] . '">';
                            echo '<input name="pizza" type="hidden" value="' . $numberOfPizzas . '">';
                            echo '<input name="price" type="hidden" value="' . $row["price"] . '">';
                            echo '<input name="total" type="hidden" value="' . $total . '">';
                            echo '<button class="quick-order" type="submit" onClick="orderPizza(\'' . $row["image_id"] . '\')">';
                            echo '<h3>' . $row["name"] . '</h3>';
                            echo '<img src="images/' . $row["image_id"] . '.jpg" alt="some pizza" width="100" height="100"/>';
                            echo '<p>' . $row["size"] . '</p>';
                            echo '<p class="price">£' . $row["price"] . '</p>';
                            echo '</button>';
                            echo '</form>';
                            echo '</div>';
                        }
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </div>
        <hr>
        <div class="center">
            <a id="customise" href="customise.php">make my own</a>
        </div>
    </div>
    <script>
        function orderPizza(pizza) {
            console.log(pizza + " ordered");
        }

        var elementByIdExample = document.getElementById("customise");
        console.log('elementByIdExample', elementByIdExample)

        var elementsByClassNameExample = document.getElementsByClassName("price");
        console.log('elementsByClassNameExample', elementsByClassNameExample)
    </script>
</body>
</html>