<?php

namespace App\Factories\DeliveryService;

use App\Objects\Package\PackageInterface;
use App\Services\DeliveryServices\DeliveryService as Service;
use App\Services\DeliveryServices\Dhl\DhlService as Dhl;

class DhlService extends DeliveryService
{
    public function __construct(private PackageInterface $package)
    {
    }

    public function getService(): Service
    {
        return new Dhl($this->package);
    }
}
