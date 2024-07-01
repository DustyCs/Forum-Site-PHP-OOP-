<?php
session_start();
ECHO session_id();

$_SESSION['game_id'] = 'Hello'; // works