<?php

namespace App\Cache;

use App\Cache\Enums\CacheKeys;
use Memcached;

class MemcacheService implements MemcacheServiceInterface
{
    public function __construct(private Memcached $cached)
    {
       $this->cached->addServer('memcached', 11211);
    }

    public function setValues(array $values)
    {
       foreach ($values as $key => $value)
       {
            $this->cached->set(CacheKeys::MEMCACHE_KEY_INT->value. $key, $value);
       }
    }


    public function getValues(array $keys): array
    {
      $values = [];
      foreach ($keys as $key)
      {
          $values[] = $this->cached->get(CacheKeys::MEMCACHE_KEY_INT->value. $key);
      }
      return $values;
    }
}
