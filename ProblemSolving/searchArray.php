<?php

function searchArray($array, $value): bool
{
    if (empty($array)) return false;

    foreach ($array as $item)
    {
        if ($item === $value){
            return true;
        }
    }
    return false;
}

$array = [1, 2, 3, 3, 4, 4, 5, 6, 6, 7];

var_dump(searchArray($array, 5));
// returns => bool(true)
