<?php

// Controller

class SignupController extends Signup{
    private $username;
    private $password;
    private $reppassword;
    private $email;

    public function __construct($username, $password, $reppassword, $email){
        $this->username = $username;
        $this->password = $password;
        $this->reppassword = $reppassword;
        $this->email = $email;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            // ECHO "empty input";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUsername() == false){
            // ECHO "empty username";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false){
            // ECHO "empty email";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->passwordMatch() == false){
            // ECHO "password mismatch";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->usernameTakenCheck() == false){
            // ECHO "password mismatch";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->setUser($this->username, $this->password, $this->email);
    }

    private function emptyInput(){
        $result;
        if (empty($this->username || $this->password || $this->reppassword || $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }

        return $result;
    }

    private function invalidUsername(){
        $result;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result;

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(){
        $result;

        if($this->password !== $this->reppassword){
            $result = false;
        }
        else{
            $result = true;
        }

        return $result;
    }

    private function usernameTakenCheck(){
        $result;

        if(!$this->checkUser($this->username, $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }

        return $result;
    }
}