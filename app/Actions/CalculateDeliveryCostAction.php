<?php

namespace App\Actions;

use App\Objects\BaseObject;
use App\Objects\Package\PackageInterface;
use App\Services\DeliveryServices\DeliveryService;

class CalculateDeliveryCostAction
{
    /**
     * Метод возвращает стоимость доставки посылки транспортной службой
     */
    public function calculate(DeliveryService $service, PackageInterface $package): int
    {
        return $service->getCostByWeight($package);
    }
}
