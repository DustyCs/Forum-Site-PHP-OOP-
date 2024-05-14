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
        <p>Name</p>
        <textarea name="Name">Enter Name</textarea> <br>
        <p>Age</p>
        <textarea name="Age" rows="2" cols="5">Enter Age</textarea> <br>
        <p>Country</p>
        <textarea name="Country" rows="2" cols="15">Enter Country</textarea> <br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>