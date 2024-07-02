<?php
ECHO '<script>console.log("Runned1")</script>';

session_start();
ECHO session_id();

$_SESSION['game_id'] = $_POST['game_id']; 

