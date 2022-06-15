<?php

namespace App\Services\Enums;

use App\Services\DeliveryServices\DeliveryService;
use App\Services\DeliveryServices\Dhl\DhlService;
use App\Services\DeliveryServices\RussianPost\RussianPostService;

enum DeliveryServices: string
{
    case DHL = 'dhl';
    case RUSSIAN_POST = 'russian_post';

    public function getService(): DeliveryService
    {
        return match ($this) {
            self::DHL => new DhlService(),
            self::RUSSIAN_POST => new RussianPostService(),
        };
    }
}
