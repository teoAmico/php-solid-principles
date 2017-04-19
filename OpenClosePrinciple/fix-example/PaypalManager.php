<?php

class PaypalManager {
    protected $paymentMethod;

    public function __constructor(PaymentMethodInterface $paymentMethod){
        $this->paymentMethod = $paymentMethod;
    }

    public function process(){
        $this->paymentMethod->processPayment();

        // ... other staff here
    }
}