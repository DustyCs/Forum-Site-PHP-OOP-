<?php 
declare(strict_types= 1);
require_once "autoloader.inc.php";

$getName = $_POST["Name"];
$getAge = $_POST["Age"];
$getCountry = $_POST["Country"];

$app = new Greeter($getName, $getAge, $getCountry);

ECHO $app->user . $app->age . $app->nationality;

Greeter::className();

?>