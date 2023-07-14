<?php

function uniqueArray($array)
{
    if (empty($array)) return null;

    $unique[] = array_shift($array);
    $found = false;
    foreach ($array as $i)
    {
        foreach ($unique as $j)
        {
            if ($i === $j) {
                $found = true;
            }
        }
        if ($found === false) $unique[] = $i;
        else $found = false;
    }
    return $unique;
}

$array = [1, 2, 3, 3, 4, 4, 5, 6, 6, 7, 4, 5, 8, 9, 9, 10, 10, 10, 11, 11, 12, 12];

print_r(uniqueArray($array));
// returns => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12