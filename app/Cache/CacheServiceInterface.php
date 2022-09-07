<?php

namespace App\Cache;

interface CacheServiceInterface
{
    public function setValues(array $values);
    public function getValues(array $keys);
}
