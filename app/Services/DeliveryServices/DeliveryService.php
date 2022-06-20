<?php

namespace App\Services\DeliveryServices;

use App\Objects\Package\PackageInterface;

interface DeliveryService
{
    public function __construct(PackageInterface $package);

    /**
     * Метод возвращает название службы доставки
     */
    public function getCostByWeight(): float;

    /**
     * Метод возвращает название службы доставки
     */
    public function getName(): string;

    /**
     * Метод возвращает экземпляр посылки
     */
    public function  getPackage(): PackageInterface;
}
