<?php
    spl_autoload_register("AutoLoader");
    function AutoLoader($class_name){
        $path = "classes/";
        $extension = ".php";
        $full_path = $path . $class_name . $extension;

        if (!file_exists($full_path)){
            return false;
        } 

        include_once $full_path;
    }


?>