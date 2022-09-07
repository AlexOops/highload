<?php

namespace App\Cache;

interface RedisServiceInterface extends CacheServiceInterface
{
    public function setValues(array $values);
    public function getValues(array $keys);
}
