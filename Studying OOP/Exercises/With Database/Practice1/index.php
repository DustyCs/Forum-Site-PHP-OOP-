<?php 
    declare(strict_types= 1);
    require_once "includes/autoloader.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $testObj = new Test();
        // $testObj->getUsersStmt("Patrick", "1");
        // $testObj->setUsersStmt("John", "2", "Hey", "2024-05-25 17:20:36")
        $usersObj = new UsersView();
        $usersObj->showUser("Patrick");

        $usersObj2 = new UsersContr();
        // $usersObj2->createUser("Jane", "7", "password", "2024-10-25 17:20:36");
    ?>
</body>  
</html>