<?php
// MVC
// Controller
// Updates and Controls Information
class UsersContr extends Users {
    public function createUser($username, $id, $password, $register_date){
        $this->setUser($username, $id, $password, $register_date);
    }
}