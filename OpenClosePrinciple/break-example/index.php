<?php
 //open class to extention close to modification
 // this example break principle because if I want to change  the payment method 
 //I have to change PaypalManager class 

 $paypalIpn = new PaypalIpn();

 $paypalManager = new PaypalManager($paypalIpn);

 $paypalManager->process();