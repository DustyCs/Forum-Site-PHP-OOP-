// Main

$(document).ready(function() {  
    let game_total = 0;
    let playerScore = 0;
    let enemyScore = 0; 
    $("input[name=enemy]").prop('disabled', true);
    $("#play").prop('disabled', false);

    $("#play").on('click', function(){
        $("#play").prop('disabled', true);
        $("input[name=enemy]").prop('disabled', false);
        if(!$('input[name=player]:checked', '#player_form').val()){
            console.log('false')
            noPlayerInput();
            setTimeout(function () {
                $("#play").prop('disabled', false); 
            }, 1500);
        }
        else{
            switch(Math.floor(Math.random() * 3)){
                case 0:
                    $('#e_rock').prop('checked', true);
                    break;
                case 1:
                    $('#e_paper').prop('checked', true);
                    break;
                case 2:
                    $('#e_scissors').prop('checked', true);
                    break;
                
            }

            let enemy_choice = $('input[name=enemy]:checked', '#enemy_form').val()
            let player_choice = $('input[name=player]:checked', '#player_form').val();
            let gameResult = rpsFun($('input[name=player]:checked', '#player_form').val(), $('input[name=enemy]:checked', '#enemy_form').val());
            let result;
        

            switch(gameResult){
                case 0:
                    enemyScore = enemyScore + 1;
                    result = "Lose";
                    $('#result_popup_msg').text(result); // can also use .html instead of .text
                    break;
                case 1:
                    playerScore = playerScore + 1;
                    result = "Win";
                    $('#result_popup_msg').text(result);
                    break;
                case 2:
                    playerScore = playerScore; 
                    result = "Tie";
                    $('#result_popup_msg').text(result);
                    break;
            }
            
            game_total = game_total + 1;
            $("#player_score").load("includes/player_choice.inc.php",
                {
                    p_score: playerScore,
                    game_result: result,
                    playerChoice: player_choice,
                    enemyChoice: enemy_choice,
                    player_clicked: true
                }
            );
            
            // Animation

            $("#enemy_score").load("includes/enemy_choice.inc.php",
                {
                     e_score: enemyScore
                }
            );

            $(".result_popup").show('fast');

            setTimeout(function () {
                $('.result_popup').fadeOut('fast');
                
                $('input[name="enemy"]').prop('checked', false);
                $('input[name="player"]').prop('checked', false);
                $("#play").prop('disabled', false);
                $("input[name=enemy]").prop('disabled', true);
            }, 1500);
            
        }
    }
);

setInterval(
    function(){
        $(".score_tab").load("includes/score_tab.inc.php"); 
    }, 5000


    
)

});

// $('.game_result').on('click', function(){
//     $(".result_popup").show('fast');
//     $(".result_popup").fadeOut('fast');
// })

// TO DO

// need to reset player state since the button cant reset it if its disabled - Done
// fix game result design
// update result animation + design
// change game design

// DRY

// function for timeout and showing popups

// next phase
// make the game results clickable
// add history
// make users login to save their history
// if user is not logged in delete their game history on refresh 