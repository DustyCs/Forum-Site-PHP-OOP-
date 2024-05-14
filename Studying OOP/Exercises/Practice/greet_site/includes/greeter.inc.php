<?php 
declare(strict_types= 1);
require_once "autoloader.inc.php";

$getText = $_POST["Name"];

ECHO $getText;

$app = new Greeter("johnny", 3, "Alaska");

ECHO $app->user;

?>