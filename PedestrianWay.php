<?php

final class PedestrianWay extends HighWay
{
	private array $currentVehicles;

	public function addVehicle(Vehicle $vehicle)
	{
		if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
			$this->setCurrentVehicles([$vehicle]);
		}
	}
}