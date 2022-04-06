<?php

require_once 'HighWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';


$motor = new MotorWay();
$pedes = new PedestrianWay();
$residential = new ResidentialWay();

echo 'MotorWay : ' . PHP_EOL;
echo $motorWay->addVehicle($motor) . PHP_EOL;


echo 'ResidentialWay : ';
echo $residentialWay->addVehicle($residential) . PHP_EOL;

echo 'PedestrianWay : ';
echo $pedestrianWay->addVehicle($pedes) . PHP_EOL;