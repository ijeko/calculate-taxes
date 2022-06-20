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

    public function __construct(protected PackageInterface $package)
    {
    }

    public function getCostByWeight(): float
    {
        if ($this->package->getWeight() <= $this->limit) {
            return $this->package->getWeight() * $this->below;
        } else {
            return $this->limit * $this->below +
                ($this->package->getWeight() - $this->limit) * $this->above;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPackage(): PackageInterface
    {
        return $this->package;
    }
}
