<?php

namespace App\Objects;

class BaseObject
{
    protected int $weight;

    public function __construct(protected array $data)
    {

    }

    abstract public function getWeight(): int

    protected function setProperties(): void
    {
        matc (in_array($this->data)) {

        }
    }
}
