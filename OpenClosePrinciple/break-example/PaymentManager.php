<?php
//this class can only manage paypall payment if I want to use a credit card instead I have to modify this class

class PaymentManager {
    protected $paypal;

    public function __constructor(PaypallIpn $paypal){
        $this->paypal = $paypal;
    }

    public function process(){
        $this->paypal->processPayment();
    }
}