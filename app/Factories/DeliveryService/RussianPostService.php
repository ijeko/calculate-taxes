<?php

namespace App\Factories\DeliveryService;

use App\Objects\Package\PackageInterface;
use App\Services\DeliveryServices\DeliveryService as Service;
use App\Services\DeliveryServices\RussianPost\RussianPostService as RussianPost;

class RussianPostService extends DeliveryService
{
    public function __construct(private PackageInterface $package)
    {
    }

    public function getService(): Service
    {
        return new RussianPost($this->package);
    }
}
