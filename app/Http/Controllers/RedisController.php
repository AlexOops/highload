<?php

namespace App\Http\Controllers;

use App\Cache\RedisServiceInterface;

class RedisController extends Controller
{
    public function __construct(private RedisServiceInterface $redisService)
    {
    }

    public function index()
    {
        $keys = ['int', 'string', 'array'];

        $values = [
            'int' => 999,
            'string' => 'Im Redis',
            'array' => [11, 22]
        ];

        $this->redisService->setValues($values);

        return $this->redisService->getValues($keys);
    }
}
