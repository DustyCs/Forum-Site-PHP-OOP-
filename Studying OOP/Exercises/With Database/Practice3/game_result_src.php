<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
    // ECHO session_id();
} ?>
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
    <script src="statics/js/resultPageMJS.js"></script>

</head>
<body>
    <div class="navigation-bar">
        <div class="score_tab"> </div> 
    </div>
    <div class="main-container">
        <div>Game Result</div>
        <div>Player Choice</div>
        <div>Enemy Choice</div>
        <div>Game Date</div>
        <div>Game Id <?php ECHO $_SESSION['game_id'] ?></div>
    </div>
</body>
</html>

<!-- Use Sessions - - -

TO DO


-->