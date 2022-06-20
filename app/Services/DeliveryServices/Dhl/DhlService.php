<?php

namespace App\Services\DeliveryServices\Dhl;

use App\Objects\Package\PackageInterface;
use App\Services\DeliveryServices\DeliveryService;

class DhlService implements DeliveryService
{
    private int $price = 100;
    private string $name = 'DHL';

    public function __construct(protected PackageInterface $package)
    {
    }

    public function getCostByWeight(): float
    {
       return $this->price * $this->package->getWeight();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPackage(): PackageInterface
    {
        return $this->package;
    }
}
