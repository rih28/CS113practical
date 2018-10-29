<?php
    $numberOfPizzas = 0;
    $price = 0;
    $total = 0;
    $totalNumberOfPizzasAllowed = 4;
    $pizzaId = "";

    $pizzaIdArray = array("margarita", "pepperoni", "ham", "vegetarian");
    $pizzaTitleArray = array("Margarita", "Pepperoni", "Ham and Pineapple", "Vegetarian");
    $pizzaImageURLArray = array("images/margarita.jpg", "images/pepperoni.jpg", "images/hamandpineapple.jpg", "images/veggie.jpg");
    $pizzaSizeArray = array("13.5''", "13.5''", "13.5''", "13.5''");
    $pizzaPriceArray = array(12.99, 14.99, 13.99, 9.99);

    $orderedPizza = array(); //Can't keep the state without passing it through the URL

    if (empty($_POST)) {
        $numberOfPizzas = 0;
        $price = 0;
        $total = 0;
        $pizzaId = "";
    } else {
        $numberOfPizzas = $_POST["pizza"];
        $total = $_POST["total"];
        $pizzaId = $_POST["pizzaid"];;
        if ($numberOfPizzas < $totalNumberOfPizzasAllowed) {
            array_push($orderedPizza, $pizzaId);
            $numberOfPizzas++;
            $price = $_POST["price"];
            $total += $price;
        }
    }

    print_r($orderedPizza);

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
            <h2>
                <?php
                    echo 'Cart: ' . $numberOfPizzas . ', £' . $total;
                ?>
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
                for ($i = 0; $i < count($pizzaTitleArray); $i++) {
                    echo '<div class="ib">';
                    echo '<form method="post">';
                    echo '<input name="pizzaid" type="hidden" value="' . $pizzaIdArray[$i] . '">';
                    echo '<input name="pizza" type="hidden" value="' . $numberOfPizzas . '">';
                    echo '<input name="price" type="hidden" value="' . $pizzaPriceArray[$i] . '">';
                    echo '<input name="total" type="hidden" value="' . $total . '">';
                    echo '<button class="quick-order" type="submit" onClick="orderPizza(\'margarita\')">';
                    echo '<h3>' . $pizzaTitleArray[$i] . '</h3>';
                    echo '<img src="' . $pizzaImageURLArray[$i] . '" alt="some pizza" width="100" height="100"/>';
                    echo '<p>' . $pizzaSizeArray[$i] . '</p>';
                    echo '<p class="price">£' . $pizzaPriceArray[$i] . '</p>';
                    echo '</button>';
                    echo '</form>';
                    echo '</div>';
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