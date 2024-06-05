<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="statics/js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="statics/css/style.css">
</head>
<body>
    <div class="navigation-bar">
        <div class="main-nav">

        </div>
    </div>
    <div class="main-container">
        <div class="main_player">
            <form action="includes/player_choice.inc.php" method="post" class="input" name="input_form">
                <input type="radio" name="player" value="Rock" id="p_rock">
                <label for="p_rock"><img src="statics/imgs/rock.jpg" alt="Rock" class="game_choice"></label>
                <input type="radio" name="player" value="Paper" id="p_paper">
                <label for="p_paper"><img src="statics/imgs/paper.jpg" alt="Paper" class="game_choice"></label>
                <input type="radio" name="player" value="Scissors" id="p_scissors">
                <label for="p_scissors"><img src="statics/imgs/scissors.jpg" alt="Scissors" class="game_choice"></label>
                <button type="button" id="submit"> PLAY </button>

            </form>
        </div>
        <div class="current_scores">
            <div class="score_board">
                <div class="board_title">
                    <h4>Current Scores</h4>
                    <button onclick="submitEnemyInput">TEST</button>
                </div>
                <div class="board_scores">
                    <div class="scores">
                        <div class="title">
                            <h5>PLAYER</h5>
                        </div>
                        <div class="score">
                            <h5>0</h5>
                        </div>
                    </div>
                    <div class="scores">
                        <div class="title">
                            <h5>ENEMY</h5>
                        </div>
                        <div class="score">
                            <h5>0</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_enemy">
            <form form action="includes/player_choice.inc.php" method="post" class="input" id="enemy_input" name="input_form">
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
<script>
    $('.game_choice').on('click', function() {
        var data = {
            rock : ($(children).closest('#e_rock').val()),
            paper : ($(children).closest('#e_paper').val())
        };

        var children = $(this).closest('#enemy_input').children();
        console.log($(children).closest('#e_rock').val());
        console.log($(children).closest('#e_paper').val());
        console.log(children);
    })


</script>
</html>