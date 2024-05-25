<?php
// MVC
// View
// Shows information to user
class UsersView extends Users{
    public function showUser($username){
        $results = $this->getUser($username);
        ECHO $results[0]['username'] . $results[0]['id'], $results[0]['password'];
    }
}