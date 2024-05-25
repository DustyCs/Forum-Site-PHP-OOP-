<?php

interface PaymentInterface {
    public function payNow();
    public function paymentProcess();
}

interface LoginInterface {
    public function loginFirst();
}


class Paypal implements PaymentInterface, LoginInterface {
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface{
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class BuyProduct{
    public function pay(PaymentInterface $paymentType){ // remember declare strict? Instead of having to switch the classes everytime its better to have an interface to have no need to change it
        // $paymentType->payNow();
        $paymentType->paymentProcess();
    }
}

$payType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($payType);