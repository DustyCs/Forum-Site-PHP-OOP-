<?php



class Test extends Dbh{
    // WITHOUT PREPARED STATEMENT
    public function getUsers(){
        $sql = "SELECT * FROM Users";
        $stmt = $this->connectme()->query($sql);// stmt means statement
        while($row = $stmt->fetch()){
            ECHO $row['username'] . '<br>';
        }
    }

    // PREPARED STATEMENT
    public function getUsersStmt($username, $id){
        $sql = "SELECT * FROM Users WHERE username = ? AND id = ?";
        $stmt = $this->connectme()->prepare($sql); 
        $stmt->execute([$username, $id]); // Chronological the first ? will take the first parameter and so on Ex: username = ? from $username and id = ? from $id 
        $names = $stmt->fetchAll();

        foreach($names as $name){
            ECHO $name['password'] . '<br>';
        }
    }

    public function setUsersStmt($username, $id, $password, $register_date){
        $sql = "INSERT INTO users(id, username, password, registered_date) VALUES (?, ?, ?, ?)"; // AGAIN the ? are placeholders 
        $stmt = $this->connectme()->prepare($sql); 
        $stmt->execute([$id, $username, $password, $register_date]);
       
    }
}