<?php

namespace App\Http\Controllers;

use App\Cache\MemcacheServiceInterface;
use Illuminate\Http\Resources\Json\JsonResource;

class MemcachedController extends Controller
{

    public function __construct(private MemcacheServiceInterface $memcacheService)
    {
    }

    public function index()
    {
        $keys = ['int', 'string', 'array'];

        $values = [
            'int' => 9,
            'string' => 'Im memcache',
            'array' => [1, 2]
        ];

        $this->memcacheService->setValues($values);

        return $this->memcacheService->getValues($keys);
    }
}
