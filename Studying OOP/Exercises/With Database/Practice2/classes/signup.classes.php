<?php 
// Model

class Signup extends Dbh{
    protected function setUser($username, $password, $email){
        $stmt = $this->connect()->prepare("INSERT INTO users (users_username, users_password, users_email) VALUES (?,?,?);"); // stmt = statement

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $hashedPassword, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($username, $email){
        $stmt = $this->connect()->prepare("SELECT users_username FROM users WHERE users_username = ? OR users_email = ?;"); // stmt = statement

        if(!$stmt->execute(array($username, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}