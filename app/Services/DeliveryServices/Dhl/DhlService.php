<?php

namespace App\Services\DeliveryServices\Dhl;

use App\Objects\Package\PackageInterface;

class DhlService implements \App\Services\DeliveryServices\DeliveryService
{
    private int $price = 100;
    private string $name = 'DHL';

    public function getCostByWeight(PackageInterface $package): int
    {
        if (!$package->getWeight()) {
            throw new \Exception('Weight not set');
        }

       return $this->price * $package->getWeight();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
