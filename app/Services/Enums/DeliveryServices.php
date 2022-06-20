<?php

namespace App\Services\Enums;

use App\Factories\DeliveryService\DeliveryService;
use App\Factories\DeliveryService\DhlService as Dhl;
use App\Factories\DeliveryService\RussianPostService as RussianPost;
use App\Objects\Package\PackageInterface;

enum DeliveryServices: string
{
    case DHL = 'dhl';
    case RUSSIAN_POST = 'russian_post';

    /**
     * Метод возвращает экземпляр службы доставки
     */
    public function getService(PackageInterface $package): DeliveryService
    {
        return match ($this) {
            self::DHL => new Dhl($package),
            self::RUSSIAN_POST => new RussianPost($package),
        };
    }
}
