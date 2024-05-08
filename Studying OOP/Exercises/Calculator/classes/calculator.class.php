<?php
// REMEMBER TO HAVE THE CLASS NAME! THE SAME AS THE FILE NAME!! class Calculator = Calculator.class.php
class Calculator {
    public $operator;
    public $number1;
    public $number2;

    public function __construct(string $operator, int $number1, int $number2)
    {
        $this->operator = $operator;
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function calculator()
    {
        switch($this->operator)
        {
            case 'add':
                $result = $this->number1 + $this->number2;
                return $result;
                break;
            case 'sub':
                $result = $this->number1 - $this->number2;
                return $result;
                break;
            case 'mul':
                $result = $this->number1 * $this->number2;
                return $result;
                break;
            case 'div':
                $result = $this->number1 / $this->number2;
                return $result;
                break;        
            default:
                ECHO "ERROR";
                break;    
                
        }
    }
}