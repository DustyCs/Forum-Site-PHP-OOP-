// const rpsFun = (playerInput, enemyInput) => {
//     let player = playerInput;
//     let enemy = enemyInput;

//     if(player == enemy){
//         return 2;
//     }
//     if(player == "Rock"){
//         if(enemy == "Paper"){
//             return 0;
//         }
//         if(enemy == "Scissors"){
//             return 1;
//         }
//     }
//     if(player == "Paper"){
//         if(enemy == "Rock"){
//             return 1;
//         }
//         if(enemy == "Scissors"){
//             return 0;
//         }
//     }
//     if(player == "Scissors"){
//         if(enemy == "Paper"){
//             return 1;
//         }
//         if(enemy == "Rock"){
//             return 0;
//         }
//     }

// }

$.getScript('main_rps_func.js', function(){

});

// Main

$(document).ready(function() {  
    let game_total = 0;
    let playerScore = 0;
    let enemyScore = 0;   
    $("#play").on('click', function(){
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
                $('#result_popup_msg').text(result);
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

        // $("#enemy_score").load("includes/enemy_choice.inc.php",
        //     {
        //          e_score: enemyScore,
        //          player_clicked: true
        //     }
        // );

        $(".result_popup").show('fast');
        setTimeout(function () {
            $('.result_popup').fadeOut('slow');
        }, 1500);
        
        
        console.log($('input[name=player]:checked', '#player_form').val());
        console.log($('input[name=enemy]:checked', '#enemy_form').val());
    }

    
);

setInterval(
    function(){
        $(".score_tab").load("includes/score_tab.inc.php");
    }, 5000
)

// setInterval(
//     function(){
//         $(".result_popup").toggle();
//     }, 2000
// )



});

