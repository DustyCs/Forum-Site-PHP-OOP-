<?php 

class playerContr extends Player{
    private $gameResult;
    private $player_choice;
    private $enemy_choice;

    public function __construct($gameResult, $player_choice, $enemy_choice){
        $this->gameResult = $gameResult;
        $this->player_choice = $player_choice;
        $this->enemy_choice = $enemy_choice;
    }

    public function sendResult(){
        $this->sendGameStatus($this->gameResult, $this->player_choice, $this->enemy_choice);
    }
}
