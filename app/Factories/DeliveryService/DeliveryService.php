<?php

namespace App\Factories\DeliveryService;

use App\Services\DeliveryServices\DeliveryService as Service;

abstract class DeliveryService
{
    /**
     * Возвращает экземпляр службы доставки
     */
    abstract protected function getService(): Service;

    /**
     * Метод возвращает стоимость доствки
     */
    public function cost(): float
    {
        $service = $this->getService();

        return $service->getCostByWeight();
    }

    /**
     * Метод возвращает название службы доставки
     */
    public function name(): string
    {
        $service = $this->getService();

        return $service->getName();
    }
}
