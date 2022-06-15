<?php

namespace App\Services\DeliveryServices\RussianPost;

use App\Objects\Package\PackageInterface;
use App\Services\DeliveryServices\DeliveryService;

class RussianPostService implements DeliveryService
{
    private int $limit = 10;
    private int $below = 100;
    private int $above = 1000;
    private string $name = 'Russian Post';


    public function getCostByWeight(PackageInterface $package): int
    {
        if (!$package->getWeight()) {
            throw new \Exception('Weight not set');
        }

        if ($package->getWeight() <= $this->limit) {
            return $package->getWeight() * $this->below;
        } else {
            return $this->limit * $this->below +
                ($package->getWeight() - $this->limit) * $this->above;
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
