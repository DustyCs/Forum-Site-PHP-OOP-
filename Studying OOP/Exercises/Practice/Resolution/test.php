<?php 

class FirstClass {
    public static $test = "hello";
    const TEST = "Hay";
    public static function test(){
        ECHO "HEY";
    }
}


class SecondClass extends FirstClass{
    public static $static = "Static";

    public static function anotherTest(){
        ECHO parent::TEST;
        ECHO self::$static;
        ECHO parent::test();
    }
}

$varr = new SecondClass;
$varr::anotherTest();