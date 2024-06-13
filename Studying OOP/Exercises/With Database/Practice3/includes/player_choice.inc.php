<?php 
$game_result = $_POST["game_result"];
$playerScore = $_POST["p_score"];
$clickStatus = $_POST["player_clicked"];
$player_choice = $_POST["playerChoice"];
$enemy_choice = $_POST["enemyChoice"];

if($_POST["player_clicked"]) {
    ECHO $_POST["p_score"] . $_POST["game_result"];
}

include_once "../classes/dbh.classes.php";
include_once "../classes/player.classes.php";
include_once "../classes/playerContr.classes.php";

// $gameResults = new playerContr($game_result, $player_choice, $enemy_choice);
// $gameResults->sendResult();
