<?php 

spl_autoload_register("AutoLoader");


function AutoLoader($class_name){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false){
        $path = '../classes/';
    }
    else {
        $path = 'classes/';
    }

    $extension = ".class.php";
    $full_path = $path . $class_name . $extension;

    if (!file_exists($full_path)){
        return false;
    } 

    include_once $full_path;
}