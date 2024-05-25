<?php
// MVC
// Model only way to interact with the database?
// Interacts with DB
class Users extends Dbh{ // Needs Dbh since Dbh has the connection to the database
    protected function getUser($username){
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connectme()->prepare($sql);
        $stmt->execute([$username]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($username, $id, $password, $register_date){
        $sql = "INSERT INTO users(id, username, password, registered_date) VALUES (?, ?, ?, ?)";
        $stmt = $this->connectme()->prepare($sql);
        $stmt->execute([$id, $username, $password, $register_date]);
    }
}