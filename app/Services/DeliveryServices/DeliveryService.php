<?php

namespace App\Services\DeliveryServices;

use App\Objects\Package\PackageInterface;

interface DeliveryService
{
    public function __construct();

    /**
     * Метод возвращает название службы доставки
     */
    public function getCostByWeight(PackageInterface $package): float;

    /**
     * Метод возвращает название службы доставки
     */
    public function getName(): string;
}
