<?php

namespace App\Services;

class Sorter
{
    function sorter($value)
    {
        for ($j = 0; $j < count($value) - 1; $j++) {
            for ($i = 0; $i < count($value) - $j - 1; $i++) {
                // если текущий элемент больше следующего
                if ($value[$i] > $value[$i + 1]) {
                    // меняем местами элементы
                    $tmp_var = $value[$i + 1];
                    $value[$i + 1] = $value[$i];
                    $value[$i] = $tmp_var;
                }
            }
        }
        return $value;
    }
}
