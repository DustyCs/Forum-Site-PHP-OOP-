<?php 
declare(strict_types = 1); 
include 'includes/autoload.php';
// include "classes/calculator.class.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/calculator.includes.php" method="post">
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
    <?php
        // ECHO $_SERVER['HTTP_HOST'] . " space " . $_SERVER['REQUEST_URI'];

        // $test = new Calculator("add", 2, 3); 
        // ECHO $test->operator;
        
        // $url = "classes/" . "calculator" . ".class.php";
        // ECHO $url . "<br>";
        // ECHO var_dump(file_exists($url));

        // $newTest = new TestClass();
        // ECHO $newTest->property;
    ?>
</body>
</html>