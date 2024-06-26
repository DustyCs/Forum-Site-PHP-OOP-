<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="statics/css/style.css">
    <link rel="stylesheet" href="statics/css/result_popup.css">
    <link rel="stylesheet" href="statics/css/nav_style.css">
    <link rel="stylesheet" href="statics/css/game_options.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="statics/js/jquery-3.7.1.min.js"></script>
    <script src="statics/js/util_func.js"></script>
    <script src="statics/js/main_rps_func.js"></script>
    <script src="statics/js/rps_js.js"></script>

</head>
<body>
    <div class="navigation-bar">
        <div class="score_tab"> </div> 
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
    <div class="result_popup">
        <h4 id="result_popup_msg">You Win!</h4>
    </div>
    <div class="no_input_popup">
        <h4 id="no_input_popup_msg">Select!</h4>
    </div>
</body>
</html>