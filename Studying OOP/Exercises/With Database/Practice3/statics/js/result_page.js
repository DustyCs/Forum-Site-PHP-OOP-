const bugTest2 = (id) => {
    game = id.id;
    $('.game_result').load("includes/gameResult.inc.php", {
        game_id: game,
        }
    );
    window.location.replace("./game_result_src.php");
}

const bugTest3 = () => {
    $('.empty-test').load("includes/removeGameResult.inc.php");
    console.log("Removed");
    new_game = document.querySelectorAll('.game_result');
    new_game_chosen = Math.floor(Math.random() * new_game.length);
    new_game_id = new_game[new_game_chosen].id
    // console.log(new_game_id);
    $('.game_result').load("includes/gameResult.inc.php", {
        game_id: new_game_id,
        }
    );
    
    window.location.replace("./game_result_src.php");

}

const confirmPopUp = () => {
    $('#remove-button').addClass('active-img')
    $(".removePopUp").show('fast');
}

const denyPopUp = () => {
    $('#remove-button').removeClass('active-img')
    $(".removePopUp").hide('fast');
}