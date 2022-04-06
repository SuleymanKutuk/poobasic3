<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    protected int $nbLane = 10;
    protected int $maxSpeed = 1;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->setcurrentVehicles($vehicle);
            $message = " vehicle added";
        } else {
            $message = "Vehicle not added";
        }
        return $message;
    }
}