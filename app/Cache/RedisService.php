<?php

namespace App\Cache;

use App\Cache\Enums\CacheKeys;
use Redis;

class RedisService implements RedisServiceInterface
{

    public function __construct(private Redis $redis)
    {
        $this->redis->connect('redis');
    }

    public function setValues(array $values)
    {
        foreach ($values as $key => $value)
        {
            $this->redis->set(CacheKeys::REDISCACHE_KEY_INT->value. $key, $value);
        }
    }

    public function getValues(array $keys)
    {
        $values = [];
        foreach ($keys as $key)
        {
            $values[] = $this->redis->get(CacheKeys::REDISCACHE_KEY_INT->value. $key);
        }
        return $values;
    }
}
