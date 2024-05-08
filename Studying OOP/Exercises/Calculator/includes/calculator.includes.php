<?php 

    declare(strict_types = 1); 
    include 'autoload.php';

    $operator = $_POST["operator"];
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $calc = new Calculator($operator, (int)$number1, (int)$number2);

    try 
    {
        ECHO $calc->calculator();
    } 
    catch (TypeError $error) 
    {
        ECHO "Error: " . $error->getMessage();
    }
?>