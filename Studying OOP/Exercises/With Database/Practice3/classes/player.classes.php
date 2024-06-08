<?php

class Player extends Dbh {
    protected function sendGameStatus($game_result, $player_choice, $enemy_choice){
        $stmt = $this->connect()->prepare("INSERT INTO game_results (game_result, player_choice, enemy_choice) VALUES (?,?,?);"); // stmt = statement

        if(!$stmt->execute(array($game_result, $player_choice, $enemy_choice))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

}