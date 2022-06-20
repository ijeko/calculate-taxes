<?php

namespace App\Objects\Package;

interface PackageInterface
{
    public function __construct(array $data);

    /**
     * Метод возвращает вес посылки
     */
    public function getWeight(): float;
}
