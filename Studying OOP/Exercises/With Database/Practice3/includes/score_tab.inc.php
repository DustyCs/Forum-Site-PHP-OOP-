<?php 

include_once "../classes/dbh.classes.php";
include_once "../classes/scoreTab.classes.php";
include_once "../classes/scoreTabContr.classes.php";

function renderResult(Array $array){
    $array = $array;
    $h_result = $array[1];
    $h_div_result = '<div class="result" id="result">'. $h_result .'</div>';
    $h_div2_result_container = '<div class="result_cont">'. $h_div_result .'</div>';
    $h_game_result = '<div class="game_result">'. $h_div2_result_container . '</div>';
    $h_game_result_a = '';

    return $h_game_result;
}

$scoreTab = new ScoreTabContr();
$scoreTab->getScores();

$scoreCount = count($scoreTab->scores);
$score_array = [];
$reversed_score_array;


for($x=0; $x < ($scoreCount); $x++){
    array_push($score_array, renderResult($scoreTab->scores[$x]));
}

$reversed_score_array = array_reverse($score_array);
foreach($reversed_score_array as $x){
    ECHO $x;
}