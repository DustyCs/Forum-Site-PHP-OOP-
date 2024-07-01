<?php

// include_once "../classes/dbh.classes.php";
// include_once "../classes/gameResult_PageCont.classes.php";

// ^^ includes incomplete gives this function an error

ECHO '<script>console.log("Runned")</script>';

session_start();
ECHO session_id();

$_SESSION['game_id'] = 'Hello4'; // WORKS