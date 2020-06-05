<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function get(array $arr, int $index, $defaultValue = null)
{
    if (array_key_exists($index, $arr)) {
        return $arr[$index];
    } else {
        return $defaultValue;
    }
}
// END
