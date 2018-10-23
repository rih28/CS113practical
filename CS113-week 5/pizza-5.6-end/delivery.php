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
            <form>
                <h3>Your details:</h3>
                <div style="text-align: left; width: 100px; display: inline-block;">
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
				    <input type="text" name="studentno" id="studentnumber" placeholder="1122132">
                    <br>
                    <input type="text" name="fname" id="firstname" placeholder="John">
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