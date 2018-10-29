<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strathclyde Pizza Place - Customise</title>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div>
        <div class="center">
            <h1>Strathclyde Pizza Place</h1>
            <h2>Make My Own</h2>
        </div>
        <hr>
        <div class="center w-70 ma">
            <form>
                <div class="make-own">
                    <h3>Size:</h3>
                    <div class="button-wrapper">
                        <input class="radio-button" type="radio" name="size" id="small" value="small" checked>
                        <label for="small">Small</label>
                        <input class="radio-button" type="radio" name="size" id="medium" value="medium">
                        <label for="medium">Medium</label>
                        <input class="radio-button" type="radio" name="size" id="large" value="large">
                        <label for="large">Large</label>
                    </div>
                </div>
                <div class="make-own">
                    <h3>Base:</h3>
                    <div class="button-wrapper">
                        <input class="radio-button" type="radio" name="base" id="thin" value="thin" checked>
                        <label for="thin">Thin</label>
                        <input class="radio-button" type="radio" name="base" id="stuffed" value="stuffed">
                        <label for="stuffed">Stuffed crust</label>
                    </div>
                </div>
                <div class="make-own">
                    <h3>Sauce</h3>
                    <div>
                        <select name="sauce" id="sauceselect">
                            <option value="tomato">Tomato</option>
                            <option value="bbq">BBQ</option>
                        </select>
                    </div>
                </div>
                <div class="make-own ma w-50">
                    <h3>Toppings</h3>
                    <div class="button-wrapper">
                        <input class="radio-button" type="checkbox" name="toppings" id="pepperoni" value="pepperoni">
                        <label for="pepperoni">Peperroni</label>
                        <input class="radio-button" type="checkbox" name="toppings" id="ham" value="ham">
                        <label for="ham">Ham</label>
                        <input class="radio-button" type="checkbox" name="toppings" id="pineapple" value="pineapple">
                        <label for="pineapple">Pineapple</label>
                        <input class="radio-button" type="checkbox" name="toppings" id="mushrooms" value="mushrooms">
                        <label for="mushrooms">Mushrooms</label>
                        <input class="radio-button" type="checkbox" name="toppings" id="peppers" value="peppers">
                        <label for="peppers">Peppers</label>
                        <input class="radio-button" type="checkbox" name="toppings" id="onions" value="onions">
                        <label for="onions">Onions</label>
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit">Order</button>
                </div>
            </form>
        </div>
        <br>
        <hr>
    </div>
</body>
</html>