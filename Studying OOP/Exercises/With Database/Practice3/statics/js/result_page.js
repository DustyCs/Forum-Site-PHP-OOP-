const bugTest2 = (id) => {
    console.log(id);
    $('.game_result').load("includes/gameResult.inc.php", {
        game_id: '1',
        }
    );
    window.location.replace("./game_result_src.php");
}

// game_id - html
// V1 -> C1 -> V2