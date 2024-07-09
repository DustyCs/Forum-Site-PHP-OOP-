$(document).ready(function (){
    $(".gameResult").load("includes/game_results.inc.php");

    setTimeout( function(){
        $(".scores_tab").load("includes/score_tab.inc.php"); 
        $(".history-row-data").load("includes/gameResultHistory.inc.php");
    }, 500)



});


