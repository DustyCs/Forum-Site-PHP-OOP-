<?php
   spl_autoload_register('AutoLoader');
   function AutoLoader($className){
       $path = "classes/";
       $extension = ".php";
       $full_path = $path . $className . $extension;
    
       if (!file_exists($full_path)){
        return false;
       } 

       include_once $full_path;
   }
