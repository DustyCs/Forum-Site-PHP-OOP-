<?php 

$h_total = $_POST["gamesPlayed"];


// $h_result = 'WIN';
// $h_div_result = '<div class="result" id="result">'. $h_result .'</div>';
// $h_div2_result_container = '<div class="result_cont">'. $h_div_result .'</div>';
// $h_game_result = '<div class="game_result">'. $h_div2_result_container . '</div>';

function renderResult(Array $array){
    $array = $array;
    ECHO $array[0];
    $h_result = 'WIN';
    $h_div_result = '<div class="result" id="result">'. $h_result .'</div>';
    $h_div2_result_container = '<div class="result_cont">'. $h_div_result .'</div>';
    $h_game_result = '<div class="game_result">'. $h_div2_result_container . '</div>';

    return $h_game_result;
}

// ECHO renderResult();


include_once "../classes/dbh.classes.php";
include_once "../classes/scoreTab.classes.php";
include_once "../classes/scoreTabContr.classes.php";

$scoreTab = new ScoreTabContr();
$scoreTab->getScores();
// ECHO $scoreTab->scores[1][0];
// ECHO count($scoreTab->scores);
$scoreCount = count($scoreTab->scores);

// for($x = 0; $x <= ($h_total - 1); $x++){
//     ECHO renderResult();
// }

for($x=0; $x < ($scoreCount); $x++){
    ECHO renderResult($scoreTab->scores[$x]);
}

// ECHO renderResult($scoreTab->scores[1]);




// LOOK OUTSIDE THE BOX
// There are many ways to have a unique identifier but heres the thing we dont need that here
// the plan is to have the database control this view and how would this view control the html? IT WONT
// the js/jquery would control it from OUTSIDE since the purpose of jquery in this project is to control the view/render to the user  
// and php purpose to control the back end!!!


// TO DO

// THIS IS JUST A TEST
// NEED TO GET STRAIGHT FOR DB THEN AUTOMATICALLY DISPLAY THE MATCHES WITHOUT THE PLAYER NEEDING TO PRESS THE BUTTON!