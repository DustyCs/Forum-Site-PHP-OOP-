<?php

class NewClass{
    public $newProperty = 'test';
}

class Person{
    public $newProperty = 'test';
    private $last = 'Niel';
    protected $protectVar = 'im rotect';

    public function lastName(){
        echo $this->last;
    }

}

class Pet extends Person{ 
    public function owner(){
        $a = $this->protectVar;
        return $a;
    }
}


$newObjectClass = new NewClass;
$pet = new Pet;

ECHO($newObjectClass->newProperty);
ECHO($pet->owner());