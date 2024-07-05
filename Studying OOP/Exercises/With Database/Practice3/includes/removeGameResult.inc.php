<?php

include_once "../classes/dbh.classes.php";
include_once "../classes/scoreTab.classes.php";
include_once "../classes/scoreTabContr.classes.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

ECHO $_SESSION['game_id'];

$scoreTab = new ScoreTabContr();
// $scoreTab->removeScore($_SESSION['game_id']); // Careful