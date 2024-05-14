<?php 

class Greeter{

    public $user;
    public $age;
    public $nationality;

    function __construct($name, $age, $country)
    {
        $this->user = $name;
        $this->age = $age;
        $this->nationality = $country;
    }


}