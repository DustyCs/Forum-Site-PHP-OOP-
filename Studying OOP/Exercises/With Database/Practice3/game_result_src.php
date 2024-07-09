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
    <link rel="stylesheet" href="statics/css/gameResultPage.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="statics/js/jquery-3.7.1.min.js"></script>
    <script src="statics/js/util_func.js"></script>
    <script src="statics/js/resultPageMJS.js"></script>
    <script src="statics/js/result_page.js"></script>

</head>
<body>
    <div class="navigation-bar">
        <div class="score_tab"> 
            <div class="scores_tab"></div>
        </div> 
    </div>
    <div class="main-container">
        <div class="gameResult">
            
        </div>
        <div class="gameHistory">
            <div class="history-row-titles">
                <div class="main-row">Game Result</div>
                <div class="main-row">Player Choice</div>
                <div class="main-row">Enemy Choice</div>
                <div class="main-row">Game Date</div>
                <div class="main-row">Game Id</div>
            </div>
            <div class="history-row-data">

            </div>
        </div>
        <div class="removePopUp">
            <div class="confirmation">
                <div class="message">
                    Are you sure you want to remove this game result?
                </div>
                <div class="remove-buttons">
                    <div class="remove-button">
                        <button onclick="bugTest3(this)">YES</button>
                    </div>
                    <div class="remove-button">
                        <button onclick="denyPopUp()">NO</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-test">

        </div>
    </div>
</body>
</html>

<!-- Use Sessions - - -

TO DO


If theres more than 10 results send it to the next page using ajax
get 10 more overwrite the first ten then again and again until user removes it all

jquery

check how many divs / class? there is in the history row data then depending on that add 1, 2, 3, 4...10 pages


-->