<?php

require( __DIR__ . '/core/functions/store.php' );
require( __DIR__ . '/core/functions/conection.php' );

$conection = new Connection();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="./core/formAction.php" method="POST">
        <input type="text" name="user_name" required autocomplete="off">
        <input type="password" name="user_password" required>
        <input type="submit" name="generate">
    </form>
</body>
</html>
