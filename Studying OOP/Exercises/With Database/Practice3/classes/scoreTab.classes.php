<?php

class ScoreTab extends Dbh{
    protected function getData(){
        // $stmt = $this->connect()->prepare("SELECT * FROM game_results ORDER BY game_id ASC"); // forgot bout this
        $stmt = $this->connect()->prepare("SELECT * FROM game_results");
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }

    protected function getDataById($game_id){
        $stmt = $this->connect()->prepare("SELECT * FROM game_results WHERE game_id = ?");
        $stmt->execute(array($game_id));
        $gameResult = $stmt->fetchAll();
        return $gameResult;
    }

    protected function removeSelectedResult($game_id){
        $stmt = $this->connect()->prepare("DELETE FROM game_results WHERE game_id = ?");
        $stmt->execute(array($game_id));
    }
}

