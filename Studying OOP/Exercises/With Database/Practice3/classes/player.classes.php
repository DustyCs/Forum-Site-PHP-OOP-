<?php

class Player extends Dbh {
    protected function gameStatus($username, $password, $email){
        $stmt = $this->connect()->prepare("INSERT INTO users (users_username, users_password, users_email) VALUES (?,?,?);"); // stmt = statement

        if(!$stmt->execute(array($username, $hashedPassword, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

}