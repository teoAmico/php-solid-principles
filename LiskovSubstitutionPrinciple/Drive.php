<?php

class Drive{

    protected $car;

    public function __constructor(Car $car){
        $this->car = $car;
    }

    public function go(){
       $this->car->drive();
    }
}