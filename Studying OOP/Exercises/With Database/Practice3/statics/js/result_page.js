const bugTest2 = (id) => {
    game = id.id;
    $('.game_result').load("includes/gameResult.inc.php", {
        game_id: game,
        }
    );
    window.location.replace("./game_result_src.php");
}

// game_id - html
// V1 -> C1 -> V2