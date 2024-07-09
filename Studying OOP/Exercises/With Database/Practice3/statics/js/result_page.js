const bugTest2 = (id) => {
    game = id.id;
    $('.game_result').load("includes/gameResult.inc.php", {
        game_id: game,
        }
    );
    window.location.replace("./game_result_src.php");
}

const bugTest3 = () => {
    $('.empty-test').load("includes/removeGameResult.inc.php", {
        // game_id: game,
        }
    );
    console.log("Removed");
    new_game = document.querySelector('.game_result').id;
    $('.game_result').load("includes/gameResult.inc.php", {
        game_id: new_game,
        }
    );
    console.log(new_game);
    window.location.replace("./game_result_src.php");

}

const confirmPopUp = () => {
    $(".removePopUp").show('fast');
}

const denyPopUp = () => {
    $(".removePopUp").hide('fast');
}