<?php

namespace App\Actions;

use App\Objects\Package\Package;
use App\Objects\Package\PackageInterface;
use App\Services\DeliveryServices\DeliveryService;

class CalculateTaxAction
{
    public function __construct(private DeliveryService $service)
    {
    }

    /**
     * Метод возвращает стоимость доставки и имя службы, для которой проивзодился расчет
     */
    public function calculate(PackageInterface $package): array
    {
        return [
            'cost' => $this->service->getCostByWeight($package),
            'service' => $this->service->getName(),
        ];
    }
}
