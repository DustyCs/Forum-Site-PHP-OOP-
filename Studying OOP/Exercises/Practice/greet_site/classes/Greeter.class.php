<?php 

class Greeter{

    public $user;
    public $age;
    public $nationality;
    static public $className = "Greeter";

    function __construct($name, $age, $country)
    {
        $this->user = $name;
        $this->age = $age;
        $this->nationality = $country;
    }

    static function className(){
        ECHO self::$className;
    }
}