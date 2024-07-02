<?php

include_once "../classes/dbh.classes.php";
include_once "../classes/scoreTab.classes.php";
include_once "../classes/gameResult_PageCont.classes.php";

function gameResultRender($title, $value){
    $h_game_title = '<div class="title">' . $title . '</div>';
    $h_game_value = '<div class="value">' . $value . '</div>';

    $h_game_div = '<div class="gr-col">' .  $h_game_title . $h_game_value . '</div>';
    return $h_game_div;
}

ECHO '<script>console.log("Runned2")</script>';

session_start();
// ECHO session_id();

// Pull Data From Model

$gameResults = new gameResult_PageCont();
$results = $gameResults->getGameResult($_SESSION['game_id']);

ECHO gameResultRender("GAME ID" , $results[0][0]);
ECHO gameResultRender("GAME RESULT", $results[0][1]);
ECHO gameResultRender("PLAYER CHOICE", $results[0][3]);
ECHO gameResultRender("ENEMY CHOICE", $results[0][4]);
ECHO gameResultRender("GAME DATE", $results[0][2]);


// Send Data to View

