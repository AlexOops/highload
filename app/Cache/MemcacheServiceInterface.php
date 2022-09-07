<?php

namespace App\Cache;

interface MemcacheServiceInterface extends CacheServiceInterface
{
    public function setValues(array $values);
    public function getValues(array $keys);
}
