<?php

include_once "../classes/dbh.classes.php";
include_once "../classes/scoreTab.classes.php";
include_once "../classes/gameResult_PageCont.classes.php";


function renderResult(Array $array){
    $array = $array;
    $h_game_id = $array[0];
    $h_result = $array[1];
    $h_playerChoice = $array[3];
    $h_enemyChoice = $array[4];
    $h_gameDate = $array[2];
    // $cb_func = "bugTest2(this)"; // callback function


    // $h_div_result = '<div class="result" id="result">'. $h_game_id . $h_result . $h_playerChoice . $h_enemyChoice . $h_gameDate . '</div>';
    // $h_div2_result_container = '<div class="result_cont">'. $h_div_result .'</div>';
    // // $h_game_result = '<div class="game_result"' . 'id='. $h_game_id  . ' onclick=' . $cb_func . '>'. $h_div2_result_container . '</div>'; // with callback function
    // $h_game_result = '<div class="game_result">'. $h_div2_result_container . '</div>';

    $h_game_result = [];
    array_push($h_game_result, gameResultRender("GAME ID", $h_game_id));
    array_push($h_game_result, gameResultRender("GAME RESULT", $h_result));
    array_push($h_game_result, gameResultRender("PLAYER CHOICE", $h_playerChoice));
    array_push($h_game_result, gameResultRender("ENEMY CHOICE", $h_enemyChoice));
    array_push($h_game_result, gameResultRender("GAME DATE", $h_gameDate));

    return $h_game_result;
}

function gameResultRender($title, $value){
    $h_game_title = '<div class="title">' . $title . '</div>';
    $h_game_value = '<div class="value">' . $value . '</div>';

    $h_game_div = '<div class="gr-col">' .  $h_game_title . $h_game_value . '</div>';
    return $h_game_div;
}

ECHO '<script>console.log("Runned2")</script>';

session_start();
// ECHO session_id();

$gameResults = new gameResult_PageCont();
$results = $gameResults->getGameResult($_SESSION['game_id']);

// Pull Data From Model

// ECHO $results[0][1]; // Works

// ECHO renderResult($results[0]);
ECHO gameResultRender("GAME ID" , $results[0][0]);
ECHO gameResultRender("GAME RESULT", $results[0][1]);
ECHO gameResultRender("PLAYER CHOICE", $results[0][3]);
ECHO gameResultRender("ENEMY CHOICE", $results[0][4]);
ECHO gameResultRender("GAME DATE", $results[0][2]);
// ECHO testRender("rock", "paper");
// ECHO testRender("rock", "paper");
// ECHO testRender("rock", "paper");
// ECHO testRender("rock", "paper");

// Send Data to View

