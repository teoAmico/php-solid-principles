<?php

class PaypalManager {
    protected $paypal;

    public function __constructor(PaypallIpn $paypal){
        $this->paypal = $paypal;
    }

    public function process(){
        $this->paypal->processPayment();
    }
}