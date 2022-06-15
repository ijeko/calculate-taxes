<?php

namespace App\Objects;

abstract class BaseObject
{
    abstract public function create(array $data): BaseObject;
}
