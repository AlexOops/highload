<?php

namespace App\Cache\Enums;

enum CacheKeys: string
{
 case MEMCACHE_KEY_INT = '_memcached_';
 case REDISCACHE_KEY_INT = '_redis_';
}
