<?php 

if(isset($_POST["submit"])){
    // ECHO "PASSED";

    // Grab
    $username = $_POST["username"];
    $password = $_POST["password"];
    $reppassword = $_POST["reppassword"];
    $email = $_POST["email"];


    // Istantiate

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-controller.classes.php";

    // include_once __DIR__ . "/../classes/dbh.classes.php";
    // include_once __DIR__ . "/../classes/signup.classes.php";
    // include_once __DIR__ . "/../classes/signup-controller.classes.php";

    $signup = new SignupController($username, $password, $reppassword, $email);


    // Error Handling

    $signup->signupUser();

    // Header

    header("location: ../index.php?error=none");
}