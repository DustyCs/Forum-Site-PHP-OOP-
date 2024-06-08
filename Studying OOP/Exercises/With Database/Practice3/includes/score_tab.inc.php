<?php 

$h_total = $_POST["gamesPlayed"];
$h_result = 'WIN';
$h_div_result = '<div class="result" id="result">'. $h_result .'</div>';
$h_div2_result_container = '<div class="result_cont">'. $h_div_result .'</div>';
$h_game_result = '<div class="game_result">'. $h_div2_result_container . '</div>';

function renderResult($result){
    ECHO $result;
}

for($x = 0; $x <= ($h_total - 1); $x++){
    renderResult($h_game_result);
}