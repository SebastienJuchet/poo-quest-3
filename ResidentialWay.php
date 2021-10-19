<?php


final class ResidentialWay extends HighWay
{
	private array $currentVehicles;

	public function addVehicle(Vehicle $vehicle)
	{
		$this->setCurrentVehicles([$vehicle]);
	}

	/**
	 * @return array
	 */
	public function getCurrentVehicles(): array
	{
		return $this->currentVehicles;
	}

	/**
	 * @param array $currentVehicles
	 */
	public function setCurrentVehicles(array $currentVehicles): void
	{
		$this->currentVehicles = $currentVehicles;
	}
}