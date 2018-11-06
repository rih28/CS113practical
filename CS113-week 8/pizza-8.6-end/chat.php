<?php
include 'php/connect.php';

$chatId = "";

function getPOSTsafely($conn, $name) {
    if (isset($_POST[$name])) {
        //cross site scripting
        return $conn->real_escape_string(htmlentities($_POST[$name]));
    } else {
        return "";
    }
}

if (!isset($_POST)) {
    $url = 'http://devweb2018.cis.strath.ac.uk/~jrb18175/pizza_8.6_end/index.php';
    header('Location: ' . $url);
} else {
    if (!isset($_POST["chatId"])) {
        $url = 'http://devweb2018.cis.strath.ac.uk/~jrb18175/pizza_8.6_end/index.php';
        header('Location: ' . $url);
    } else {
        $chatId = getPOSTsafely($conn, "chatId");
        //$chatId = $_POST["chatId"];
    }


    if (!isset($_POST["message"])) {
        //TODO: Something appropriate
    } else {
        $message = getPOSTsafely($conn, "message");
        //$message = = $_POST["message"];

        //<b>bold</b>
        //link
        //script tag
        //window.location.redirect("https://google.co.uk")

        $insert = "INSERT INTO chat (chatid, message) VALUES ('" . $chatId . "', '" . $message . "')";
        if ($conn->query($insert) === TRUE) {
            //echo "New record created successfully";
        } else {
            //echo "Error: " . $insert . "<br>" . $conn->error;
        }
    }

    //1' OR '1'='1
    //DROP Table chat
    //Prepared Statements: https://www.w3schools.com/php/php_mysql_prepared_statements.asp

    /* OWASP recommends
     * Use of prepared statements
     * Use of stored procedures
     * Escaping all user inputs
     * Minimise privileges assigned to each DB account
     * Input Validation
     */
    
    $sql = "SELECT * FROM chat WHERE chatid = '" . $chatId . "'";
    $result = $conn->query($sql);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/chat.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="panel panel-default" style="width: 100%;">
            <div class="panel-heading text-center">Chat</div>
            <div class="panel-body">
                <div class="container">
                    <?php 
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<div class="row message-bubble">';
                                echo '<p class="text-muted">' . mysqli_real_escape_string($conn, $row["chatid"]) . '</p>';
                                echo '<p>' . mysqli_real_escape_string($conn, $row["message"]) . '</p>';
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
                <div class="panel-footer">
                    <form method="post">
                        <div class="input-group">
                            <input type="hidden" name="chatId" value="<?php echo $chatId; ?>">
                            <input type="text" class="form-control" name="message">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>