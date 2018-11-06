<?php
    include 'php/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="text-center">
    <form class="form-signin" action="chat.php" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Please add a chat id:</h1>
        <label for="chatId" class="sr-only">Chat Id:</label>
        <input type="text" id="chatId" name="chatId" class="form-control" placeholder="12" required autofocus>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Go to Chat</button>
    </form>
</body>
</html>