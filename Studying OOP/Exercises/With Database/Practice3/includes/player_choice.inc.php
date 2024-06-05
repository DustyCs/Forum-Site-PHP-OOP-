<?php 
// $_SESSION["player_score"] = $_POST["p_score"];

$game_result = $_POST["game_result"];
$playerScore = $_POST["p_score"];
$clickStatus = $_POST["player_clicked"];


if($_POST["player_clicked"]) {
    ECHO $_POST["p_score"] . $_POST["game_result"];
}

// IF PLAYER WIN REGISTER THE WIN INTO THE DATABASE AND SO ON WHEN LOSE OR TIE!