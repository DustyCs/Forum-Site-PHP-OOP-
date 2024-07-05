<?php

class ScoreTabContr extends ScoreTab{
    public $scores = [];

    public function getScores(){
        $this->scores = $this->getData();
    }

    public function removeScore($game_id){
        $this->removeSelectedResult($game_id);
    }
    
}