<?php

namespace App\Factories\DeliveryServiceFactory;

use App\Services\DeliveryServices\DeliveryService;
use App\Services\DeliveryServices\Dhl\DhlService;
use App\Services\DeliveryServices\RussianPost\RussianPostService;
use App\Services\Enums\DeliveryServices;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DeliveryServiceFactory
{
    /**
     * Метод возвращает экземпляр службы доставки по названию
     */
    public function createByName(string $serviceName): DeliveryService
    {
        try {
            return match ($serviceName) {
                DeliveryServices::DHL->value => new DhlService(),
                DeliveryServices::RUSSIAN_POST->value => new RussianPostService(),
            };
        } catch (\Exception) {
            throw new NotFoundHttpException('Service not found');
        }
    }
}
