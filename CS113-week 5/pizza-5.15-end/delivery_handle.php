<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strathclyde Pizza Place - Delivery</title>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div>
    <div class="center">
        <h1>Strathclyde Pizza Place</h1>
        <h2>Delivery</h2>
    </div>
    <hr>
    <div class="center">
<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 28/10/2018
 * Time: 14:03
 */

print_r($_POST);

$studentNumber = strip_tags(isset($_POST["studentno"]) ? $_POST["studentno"] : "");
$firstName = strip_tags(isset($_POST["fname"]) ? $_POST["fname"] : "");

    ?>
    <form action="delivery_handle.php" method="post">
        <h3>Your details:</h3>
        <div style="text-align: left; width: 150px; display: inline-block;">
            <label for="studentnumber">Student number:</label>
            <br>
            <label for="firstname">First name:</label>
            <br>
            <label for="lastname">Last name: </label>
            <br>
            <label for="housenumber">House number: </label>
            <br>
            <label for="streetname">Street: </label>
            <br>
            <label for="postcode">Post Code: </label>
        </div>
        <div style="text-align: left; width: 10%; width: 200px; display: inline-block;">
            <input type="text" name="studentno" id="studentnumber" placeholder="1122132" value="<?php echo $studentNumber; ?>" <?php if ($studentNumber==="") echo 'style="background-color: red;"'; ?>>
            <br>
            <input type="text" name="fname" id="firstname" placeholder="John" value="<?php echo $firstName; ?>" <?php if ($firstName==="") echo 'style="background-color: red;"'; ?>>
            <br>
            <input type="text" name="lname" id="lastname" placeholder="Doe">
            <br>
            <input type="text" name="houseno" id="housenumber" placeholder="31">
            <br>
            <input type="text" name="street" id="streetname" placeholder="Russell Avenue">
            <br>
            <input type="text" name="pcode" id="postcode" placeholder="KY74LA">
        </div>
        <br>
        <br>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
            </div>
            <hr>
        </div>
    </body>
</html>
