<?php

class ScoreTab extends Dbh{
    protected function getData(){
        // $stmt = $this->connect()->prepare("SELECT * FROM game_results ORDER BY game_id ASC"); // forgot bout this
        $stmt = $this->connect()->prepare("SELECT * FROM game_results");
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }
}

