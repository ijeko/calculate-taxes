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

    public function __construct()
    {
    }

    public function getCostByWeight(PackageInterface $package): float
    {
        if ($package->getWeight() <= $this->limit) {
            return $package->getWeight() * $this->below;
        } else {
            return $this->limit * $this->below +
                ($package->getWeight() - $this->limit) * $this->above;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }
}
