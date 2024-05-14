<?php 
declare(strict_types= 1);
require_once "includes/autoloader.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/greeter.inc.php" method="post">
        <textarea name="Name"></textarea>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>