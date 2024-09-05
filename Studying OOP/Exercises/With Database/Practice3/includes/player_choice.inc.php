<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$game_result = $_POST["game_result"];
$clickStatus = $_POST["player_clicked"];
$player_choice = $_POST["playerChoice"];
$enemy_choice = $_POST["enemyChoice"];
$player_score = $_SESSION["player_score"];


ECHO $_SESSION["player_score"];


include_once "../classes/dbh.classes.php";
include_once "../classes/player.classes.php";
include_once "../classes/playerContr.classes.php";

$gameResults = new playerContr($game_result, $player_choice, $enemy_choice);
$gameResults->sendResult();
