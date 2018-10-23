<?php
    $numberOfPizzas = 0;
    $price = 0;
    $total = 0;
    $totalNumberOfPizzasAllowed = 4;

    /** Utilise later in Arrays **/
    $pizzaTitle = "Margarita";
    $pizzaImageURL = "images/margarita.jpg";
    $pizzaSize = "13.5''";
    $pizzaPrice = 12.99;
    /** END: Utilise later in Arrays **/

    $orderedPizza = array(); //Can't keep the state without passing it through the URL

    if (empty($_POST)) {
        $numberOfPizzas = 0;
        $price = 0;
        $total = 0;
        $pizzaId = "";
    } else {
        $numberOfPizzas = $_POST["pizza"];
        $total = $_POST["total"];
        if ($numberOfPizzas < $totalNumberOfPizzasAllowed) {
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
            <div class="ib">
                <form method="post">
                    <input id="margarita" name="pizza" type="hidden" value="<?php echo $numberOfPizzas; ?>">
                    <input name="price" type="hidden" value="<?php echo $pizzaPrice; ?>">
                    <input name="total" type="hidden" value="<?php echo $total; ?>">
                    <button class="quick-order" type="submit" onClick="orderPizza('margarita')">
                        <h3><?php echo $pizzaTitle; ?></h3>
                        <img src="<?php echo $pizzaImageURL; ?>" alt="some pizza" width="100" height="100"/>
                        <p><?php echo $pizzaSize; ?></p>
                        <p class="price"><?php echo "£$pizzaPrice"; ?></p>
                    </button>
                </form>
            </div>
            <div class="ib">
                <form method="post">
                    <input id="pepperoni" name="pizza" type="hidden" value="<?php echo $numberOfPizzas; ?>">
                    <input name="price" type="hidden" value="<?php echo 14.99; ?>">
                    <input name="total" type="hidden" value="<?php echo $total; ?>">
                    <button class="quick-order" onClick="orderPizza('pepperoni')">
                        <h3>Pepperoni</h3>
                        <img src="images/pepperoni.jpg" alt="some pizza" width="100" height="100"/>
                        <p>13.5''</p>
                        <p class="price">£14.99</p>
                    </button>
                </form>
            </div>
            <div class="ib">
                <form method="post">
                    <input id="hama" name="pizza" type="hidden" value="<?php echo $numberOfPizzas; ?>">
                    <input name="price" type="hidden" value="<?php echo 13.99; ?>">
                    <input name="total" type="hidden" value="<?php echo $total; ?>">
                    <button class="quick-order" onClick="orderPizza('ham')">
                        <h3>Ham and Pineapple</h3>
                        <img src="images/hamandpineapple.jpg" alt="some pizza" width="100" height="100"/>
                        <p>13.5''</p>
                        <p class="price">£13.99</p>
                    </button>
                </form>
            </div>
            <div class="ib">
                <form method="post">
                    <input id=veg" name="pizza" type="hidden" value="<?php echo $numberOfPizzas; ?>">
                    <input name="price" type="hidden" value="<?php echo 9.99; ?>">
                    <input name="total" type="hidden" value="<?php echo $total; ?>">
                    <button class="quick-order" onClick="orderPizza('veg')">
                        <h3>Vegetarian</h3>
                        <img src="images/veggie.jpg" alt="some pizza" width="100" height="100"/>
                        <p>13.5''</p>
                        <p class="price">£9.99</p>
                    </button>
                </form>
            </div>
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