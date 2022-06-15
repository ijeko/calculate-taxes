<?php

namespace App\Services\DeliveryServices;

use App\Objects\Package\PackageInterface;

interface DeliveryService
{
    public function getCostByWeight(PackageInterface $package): int;
    public function getName(): string;
}
