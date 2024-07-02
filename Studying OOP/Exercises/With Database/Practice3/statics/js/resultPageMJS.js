$(document).ready(function (){
    $(".main-container").load("includes/game_results.inc.php");

    setInterval( function(){
        $(".score_tab").load("includes/score_tab.inc.php"); 
    }, 5000) // After all is set maybe have this also clickable?
});


