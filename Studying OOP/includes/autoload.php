<?php
   spl_autoload_register('AutoLoader');
   function AutoLoader($className){
       $path = "classes/";
       $extension = ".php";
       $full_path = $path . $className . $extension;

       include_once $full_path;
   }
