<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        //$_SERVER["PHP_SELF"]
        //A super global variable which stores the filename of the currently executing script
        //Sends the submitted form data to the original page instead of to a different page
        // - Allows users to get error messages on the same page as the form
        //This variable can be used by hackers!!!

        //A function to test input
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $name = isName($name);
            $email = test_input($_POST["email"]);
            $email = isEmail($email);
            $website = test_input($_POST["website"]);
            $website = isWebsite($website);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);

            //echo $name;
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function isName($nm) {
            if (!preg_match("/^[a-zA-Z]*$/", $nm)) {
                echo "Only letters and white space allowed <br>";
            }
        }

        function isEmail($em) {
            if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format <br>";
            }
        }

        function isWebsite($ws) {
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $ws)) {
                echo "Invalid URL <br>";
            }
        }
    ?>
    <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="text" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender: <input type="radio" name="gender" value="female" checked>Female
        <input type="radio" name="gender" value="male">Male
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>