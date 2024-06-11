<?php

class ScoreTab extends Dbh{
    protected function getData(){
        $stmt = $this->connect()->prepare("SELECT * FROM game_results ORDER BY id ASC");
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }
}

// test ^^