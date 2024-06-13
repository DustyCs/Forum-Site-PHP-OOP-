const rpsFun = (playerInput, enemyInput) => {
    let player = playerInput;
    let enemy = enemyInput;

    if(player == enemy){
        return 2;
    }
    if(player == "Rock"){
        if(enemy == "Paper"){
            return 0;
        }
        if(enemy == "Scissors"){
            return 1;
        }
    }
    if(player == "Paper"){
        if(enemy == "Rock"){
            return 1;
        }
        if(enemy == "Scissors"){
            return 0;
        }
    }
    if(player == "Scissors"){
        if(enemy == "Paper"){
            return 1;
        }
        if(enemy == "Rock"){
            return 0;
        }
    }

}
