<?php

class ScoreTabContr extends ScoreTab{
    public $scores = [];

    public function getScores(){
        $this->scores = $this->getData();
    }
    
}