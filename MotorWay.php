<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $this->setcurrentVehicles($vehicle);
            $message = " vehicle added";
        } else {
            $message = "Vehicle not added";
        }
        return $message;
    }
}