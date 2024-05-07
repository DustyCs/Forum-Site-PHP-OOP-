<?php 
declare(strict_types = 1); 
include 'includes/autoload.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.includes.php" method="post">
        <p>Calculator</p>
        <input type="number" name="number1" placeholder="First Number">
        <select name="operator">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="muk">Multiplication</option>
        </select>
        <input type="number" name="number2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>