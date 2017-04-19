<?php
 //open class to extention close to modification
 // Now I can pass any object to PaypalManager (payment method) that implement PaymentMethodInterface

 $paypalIpn = new PaypalIpn();
 $creditCard = new CreditCard();

 $paypalManager = new PaymentManager($creditCard);

 $paypalManager->process();