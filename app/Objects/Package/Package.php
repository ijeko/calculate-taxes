<?php

namespace App\Objects\Package;

use App\Objects\BaseObject;

class Package extends BaseObject implements PackageInterface
{
    protected int $weight;

    /**
     * Создает экземпляр объекта
     */
    public function create(array $data): BaseObject
    {
        $this->setProperties($data);

        return new self();
    }

    /**
     * Устанавливает свойства объекта
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

    public function getWeight(): int
    {
        return $this->weight;
    }
}
