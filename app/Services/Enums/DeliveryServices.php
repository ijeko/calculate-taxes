<?php

namespace App\Services\Enums;

enum DeliveryServices: string
{
    case DHL = 'dhl';
    case RUSSIAN_POST = 'russian_post';
}
