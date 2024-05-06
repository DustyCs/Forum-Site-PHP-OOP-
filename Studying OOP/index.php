<?php
    declare(strict_types = 1); // This makes it so that no one can pass the wrong type of variable in a class
    include 'includes/autoload.php'
    // spl_autoload_register('AutoLoader');
    // function AutoLoader($className){
    //     $path = "classes/";
    //     $extension = ".php";
    //     $full_path = $path . $className . $extension;

    //     include_once $full_path;
    // } 
    // MOVED TO A NEW FILE
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
        // include 'includes/person.php';

        $andrew = new Person\Person(); // the Person\ points to a Person namespace 
        $andrew->setName('Johnny');

        $apple = new Person\Product(1, 'Apple');

        echo $apple->product_id, $apple->product_name;
        ECHO Person\Product::$products_director; // use colon for statics
    ?>
</body>
</html>