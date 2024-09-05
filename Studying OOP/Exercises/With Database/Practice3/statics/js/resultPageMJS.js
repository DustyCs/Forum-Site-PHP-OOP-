$(document).ready(function (){
    $(".gameResult").load("includes/game_results.inc.php");

    setTimeout( function(){
        $(".scores_tab").load("includes/score_tab.inc.php"); 
        $(".history-row-data").load("includes/gameResultHistory.inc.php");

        
    }, 500)

    setInterval(function(){
        game_results = document.querySelectorAll('.gh_game_result');
        game_result_count = game_results.length;
        console.log(game_result_count);
        // $(".gh_game_result").hide('slow'); // works
    }, 1000)
    
   
});

// IDEA TO DO
// query select all of the game results
// select all 8 and the rest will be hidden - using .prop? hide? show?
// then add a page when there is more than 8
// then show the rest at the next page
// and so on
// instead of number buttons use arrows
// nvm good idea but decided to use overflow instead...

