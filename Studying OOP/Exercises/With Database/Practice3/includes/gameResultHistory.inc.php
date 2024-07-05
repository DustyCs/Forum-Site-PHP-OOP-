<?php

include_once "../classes/dbh.classes.php";
include_once "../classes/scoreTab.classes.php";
include_once "../classes/scoreTabContr.classes.php";


function renderResult(Array $array){
    $array = $array;
    $h_result = $array[1];
    $h_game_id = $array[0];
    $h_game_date = $array[2];
    $h_game_player_choice = $array[3];
    $h_game_enemy_choice = $array[4];
    $cb_func = "bugTest2(this)";
    $h_div_result = '<div class="gh_result" id="result">'. '<div>' . $h_result . '</div>' . '<div>' .$h_game_player_choice . '</div>' . '<div>'  . $h_game_enemy_choice . '</div>' . '<div>' .  $h_game_date . '</div>' . '<div>'   . $h_game_id . '</div>' . '</div>';
    $h_div2_result_container = '<div class="gh_result_cont">'. $h_div_result .'</div>';
    $h_game_result = '<div class="gh_game_result"' . 'id='. $h_game_id  . ' onclick=' . $cb_func . '>'. $h_div2_result_container . '</div>';

    return $h_game_result;
}

// Since this functions the same as the score tabs - Just reused it instead

$gameHistory = new ScoreTabContr();
$gameHistory->getScores();

$scoreCount = count($gameHistory->scores);
$score_array = [];
$reversed_score_array;


for($x=0; $x < ($scoreCount); $x++){
    array_push($score_array, renderResult($gameHistory->scores[$x]));
}

$reversed_score_array = array_reverse($score_array);

foreach($reversed_score_array as $x){
    ECHO $x;
}

// ECHO var_dump($gameHistory->scores[1]);

// TODO

// GONNA HAVE TO PLACE ALL THOSE DATA INSIDE A DIV OF THEIR OWN TO LINE IT UP WITH THE TITLES!