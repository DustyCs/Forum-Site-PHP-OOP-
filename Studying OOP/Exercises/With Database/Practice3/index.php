<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="statics/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
    <div class="navigation-bar">
        <div class="main-nav">

        </div>
    </div>
    <div class="main-container">
        <div class="main_player">
            <form action="includes/player_choice.inc.php" method="post" class="player_input">
                <input type="radio" name="player" value="Rock" id="p_rock">
                <label for="p_rock"><img src="statics/imgs/rock.jpg" alt="Rock" class="game_choice"></label>
                <input type="radio" name="player" value="Paper" id="p_paper">
                <label for="p_paper"><img src="statics/imgs/paper.jpg" alt="Paper" class="game_choice"></label>
                <input type="radio" name="player" value="Scissors" id="p_scissors">
                <label for="p_scissors"><img src="statics/imgs/scissors.jpg" alt="Scissors" class="game_choice"></label>
                <button onclick="submitBothForms"> PLAY </button>
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
            <form form action="includes/player_choice.inc.php" method="post" class="enemy_input" id="enemy_input">
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

// const submitEnemyInput = () => {
//     document.getElementById("enemy_input").submit();
//     document.getElementById("player_input").submit();
// }

// function submitBothForms() {
//     const updateDB = document.forms[0];
//     const payPal = document.forms[1];
//     console.log(updateDB, payPal)
//     fetch(updateDB.action, {
//         method: updateDB.method,
//         headers: { "content-type": updateDB.enctype },
//         body: new FormData(updateDB),
//     });

//     updateDB.submit();
// }

async function submitBothForms() {
    const updateDB = document.forms[1];
    const payPal = document.forms[0];
    const res = await fetch(updateDB.action, {
        method: updateDB.method,
        headers: { "content-type": updateDB.enctype },
        body: new FormData(updateDB),
    });
    if (!res.ok) {
        const err = new Error(`DB Update Failed! Status: ${res.status}`);
        const isJSON = res.headers.get("content-type") == "application/json";
        err.body = await (isJSON ? res.json() : res.text());
        throw err;
    }

    payPal.submit();
}

</script>
</html>