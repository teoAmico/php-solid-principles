<?php

use \SingleResponsabilityPrinciple\FixPrinciple\Logger;
use \SingleResponsabilityPrinciple\FixPrinciple\User;

//instantiate a logger object
$logger = new Logger();

//use dependency injection
$user = new User($logger);

$user->create(array());

