<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="statics/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="statics/js/jquery-3.7.1.min.js"></script>
    <script>
        const rpsFun = (playerInput, enemyInput) => {
            let player = playerInput;
            let enemy = enemyInput;

            if(player == enemy){
                return 2;
            }
            if(player == "Rock"){
                if(enemy == "Paper"){
                    return 0;
                }
                if(enemy == "Scissors"){
                    return 1;
                }
            }
            if(player == "Paper"){
                if(enemy == "Rock"){
                    return 1;
                }
                if(enemy == "Scissors"){
                    return 0;
                }
            }
            if(player == "Scissors"){
                if(enemy == "Paper"){
                    return 1;
                }
                if(enemy == "Rock"){
                    return 0;
                }
            }

        }

        $(document).ready(function() {
            playerScore = 0;
            enemyScore = 0;

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

                let gameResult = rpsFun($('input[name=player]:checked', '#player_form').val(), $('input[name=enemy]:checked', '#enemy_form').val());
                let result;

                switch(gameResult){
                    case 0:
                        enemyScore = enemyScore + 1;
                        result = "Lose";
                        break;
                    case 1:
                        playerScore = playerScore + 1;
                        result = "Win";
                        break;
                    case 2:
                        playerScore = playerScore; 
                        result = "Tie";
                        break;
                }
                

                $("#player_score").load("classes/playerContr.classes.php",
                    {
                         p_score: playerScore,
                         game_result: result,
                         player_clicked: true
                    }
                );
                $("#enemy_score").load("classes/enemyContr.classes.php",
                    {
                         e_score: enemyScore,
                         player_clicked: true
                    }
                );

                

                // console.log($('input[name=player]:checked', '#player_form').val());
                // console.log($('input[name=enemy]:checked', '#enemy_form').val());
                // console.log(Math.Floor(Math.random() * 2));
            }
        );
    });



    </script>
</head>
<body>
    <div class="navigation-bar">
        <div class="main-nav">

        </div>
    </div>
    <div class="main-container">
        <div class="main_player">
            <form method="post" class="player_input" id="player_form">
                <input type="radio" name="player" value="Rock" id="p_rock">
                <label for="p_rock"><img src="statics/imgs/rock.jpg" alt="Rock" class="game_choice"></label>
                <input type="radio" name="player" value="Paper" id="p_paper">
                <label for="p_paper"><img src="statics/imgs/paper.jpg" alt="Paper" class="game_choice"></label>
                <input type="radio" name="player" value="Scissors" id="p_scissors">
                <label for="p_scissors"><img src="statics/imgs/scissors.jpg" alt="Scissors" class="game_choice"></label>
                <!-- <button id="play"> PLAY </button> -->
            </form>
        </div>
        <div class="current_scores">
            <div class="score_board">
                <div class="board_title">
                    <h4>Current Scores</h4>
                </div>
                <div class="board_scores">
                    <div class="scores">
                        <div class="title">
                            <h5>PLAYER</h5>
                        </div>
                        <div class="score" id="player_score">
                        <h5>0</h5>
                        </div>
                        <button id="play"> PLAY </button>
                    </div>
                    <div class="scores">
                        <div class="title">
                            <h5>ENEMY</h5>
                        </div>
                        <div class="score" id="enemy_score">
                            <h5>0</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_enemy">
            <form method="post" class="enemy_input" id="enemy_form">
                <input type="radio" name="enemy" value="Rock" id="e_rock">
                <label for="e_rock"><img src="statics/imgs/rock.jpg" alt="Rock" class="game_choice"></label>
                <input type="radio" name="enemy" value="Paper" id="e_paper">
                <label for="e_paper"><img src="statics/imgs/paper.jpg" alt="Paper" class="game_choice"></label>
                <input type="radio" name="enemy" value="Scissors" id="e_scissors">
                <label for="e_scissors"><img src="statics/imgs/scissors.jpg" alt="Scissors" class="game_choice"></label>
            </form> 
        </div>
    </div>
</body>
</html>