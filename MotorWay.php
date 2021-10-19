<?php


final class MotorWay extends HighWay
{
	private array $currentVehicles;

	public function addVehicle(Vehicle $vehicle)
	{
		if($vehicle instanceof Car) {
			var_dump($vehicle);
			$this->setCurrentVehicles([$vehicle]);
		}
	}
}