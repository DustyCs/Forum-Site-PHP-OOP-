<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once "../classes/dbh.classes.php";
include_once "../classes/scoreTab.classes.php";
include_once "../classes/scoreTabContr.classes.php";

function renderResult(Array $array){
    $array = $array;
    $h_result = $array[1];
    $h_game_id = $array[0];
    // $cb_func = "console.log(this)";
    $cb_func = "bugTest2(this)";
    $h_div_result = '<div class="result" id="result">'. $h_result .'</div>';
    $h_div2_result_container = '<div class="result_cont">'. $h_div_result .'</div>';
    $h_game_result = '<div class="game_result"' . 'id='. $h_game_id  . ' onclick=' . $cb_func . '>'. $h_div2_result_container . '</div>';

    return $h_game_result;
}

$scoreTab = new ScoreTabContr();
$scoreTab->getScores();

$scoreCount = count($scoreTab->scores);
$score_array = [];
$reversed_score_array;

$winCount = $scoreTab->getWinCount();
$loseCount = $scoreTab->getLoseCount();

$_SESSION['player_score'] = $winCount;
$_SESSION['enemy_score'] = $loseCount;


for($x=0; $x < ($scoreCount); $x++){
    array_push($score_array, renderResult($scoreTab->scores[$x]));
}

$reversed_score_array = array_reverse($score_array);
foreach($reversed_score_array as $x){
    ECHO $x;
}