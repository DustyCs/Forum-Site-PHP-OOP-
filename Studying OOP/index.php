<!DOCTYPE html>
<html lang="en">
<?php 
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // include 'includes/person.php';

        $andrew = new Person();
        $andrew->setName('Johnny');

        $apple = new Product(1, 'Apple');

        echo $apple->product_id, $apple->product_name;
        ECHO Product::$products_director; // use colon for statics
    ?>
</body>
</html>