<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

ECHO $_SESSION["enemy_score"];;



