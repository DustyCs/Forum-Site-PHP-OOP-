<?php

namespace Person;

class Customer {
    protected $customer_id = 3;

}

class Person extends Customer{
    private $id = 2;
    public $name = 'Andrew';

    public function setName($name){
        $this->name = $name;
        // ECHO $this->customer_id;
    }
}

class Product {
    public $product_id;
    public $product_name;

    public static $products_director = 'Johhny';

    public function __construct($product_id, $product_name)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
    }

    public function __destruct()
    {
        ECHO "Destroyed";
    }

    public static function echosmth()
    {
        ECHO self::$products_director; //self references the Product Class Itself use self for static else use this
    }
}