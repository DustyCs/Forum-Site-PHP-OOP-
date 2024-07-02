<?php

include_once "../classes/dbh.classes.php";
include_once "../classes/scoreTab.classes.php";
include_once "../classes/gameResult_PageCont.classes.php";

// ^^ includes incomplete gives this function an error

ECHO '<script>console.log("Runned2")</script>';

session_start();
// ECHO session_id();

$gameResults = new gameResult_PageCont();
$results = $gameResults->getGameResult($_SESSION['game_id']);

// Pull Data From Model

ECHO $results[0][1];

// Send Data to View