<?php

class gameResult_PageCont extends ScoreTab{
    public function __construct(){
        
    }
    public function getGameResult($game_id){
        $result = $this->getDataById($game_id);
        return $result;
    }
}