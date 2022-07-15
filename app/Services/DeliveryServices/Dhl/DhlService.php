<?php

namespace App\Services\DeliveryServices\Dhl;

use App\Objects\Package\PackageInterface;
use App\Services\DeliveryServices\DeliveryService;

class DhlService implements DeliveryService
{
    private int $price = 100;
    private string $name = 'DHL';

    public function __construct()
    {
    }

    public function getCostByWeight(PackageInterface $package): float
    {
       return $this->price * $package->getWeight();
    }

    public function getName(): string
    {
        return $this->name;
    }
}
