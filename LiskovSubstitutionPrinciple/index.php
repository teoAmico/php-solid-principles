<?php
//liskov principle say that I can substitute a base parent class object instance with a child class instance 
// without altering the program in this case a Car can be substitute  by a Ferrari because Ferrari extends Car class and it inherit same methods

//$car = new Car();
$car = new Ferrari();

$drive = new Drive($car);

$drive->go();