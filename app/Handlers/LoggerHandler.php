<?php

namespace App\Handlers;

use App\Services\Sorter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoggerHandler implements LoggerHandlerInterface
{
    /**
     * @param Sorter $bubbleSorter
     */
    public function __construct(public Sorter $bubbleSorter)
    {
        $this->bubbleSorter = new Sorter();
    }


    public function handler(Request $request)
    {
        Log::info("Started at : " . date(DATE_RFC2822));

        $arr = [7,1,3,5,9,10,6,2,4,8];
        $bubbleSort = $this->bubbleSorter->sorter($arr);

        Log::info("Finished at : " . date(DATE_RFC2822));
        Log::debug(memory_get_usage() . " used memories");
        var_dump($bubbleSort);
    }
}
