<?php 

//CONTROLLER 
// ECHO var_dump($_POST);
if($_POST["player_clicked"]) {
    ECHO $_POST["somethingNew"];
}

$_SESSION["player_score"] = $_POST["somethingNew"];



// if(isset($_POST["submit"])){
//     // ECHO "PASSED";

//     // Grab

//     ECHO var_dump($_POST[]);

//     // Istantiate

//     // Error Handling

//     // Header

//     // header("location: ../index.php?error=none");
// }