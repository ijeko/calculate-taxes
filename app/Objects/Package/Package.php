<?php

namespace App\Objects\Package;

/**
 * Класс Посылка, содержит характеристики для рассчета стоимости доставки
 */
class Package implements PackageInterface
{
    protected float $weight;

    public function __construct(array $data)
    {
        $this->setProperties($data);
    }

    /**
     * Устанавливает характеристики посылки из запроса
     */
    private function setProperties(array $data): void
    {
        foreach ($data as $property => $value) {
            $packageProperties = array_keys(get_class_vars(self::class));

            if (in_array($property, $packageProperties)) {
                $this->$property = $value;
            }
        }
    }

    public function getWeight(): float
    {
        if (!$this->weight || $this->weight <= 0) {
            throw new \Exception('Weight not set');
        }

        return $this->weight;
    }
}
