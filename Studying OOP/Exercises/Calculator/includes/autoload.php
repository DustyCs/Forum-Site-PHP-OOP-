<?php
    // OLD
    // spl_autoload_register("AutoLoader");
    // function AutoLoader($class_name){
    //     $path = "classes/";
    //     $extension = ".class.php";
    //     $full_path = $path . $class_name . $extension;

    //     if (!file_exists($full_path)){
    //         return false;
    //     } 

    //     include_once $full_path;
    // }

    // New Auto Loader With URL For Safety/Efficiency? 

    spl_autoload_register("AutoLoader");
    function AutoLoader($class_name){
        // Difference Start
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if (strpos($url, 'includes') !== false){
            $path = '../classes/';
        }
        else {
            $path = 'classes/';
        }

        // $path = "classes/"; ------ GONE

        // Difference End
        
        $extension = ".class.php";
        $full_path = $path . $class_name . $extension;
        // ECHO "<br> HELLO WORLD" . $full_path;
        if (!file_exists($full_path)){
            return false;
        } 

        include_once $full_path;
    }


?>