<?php

function findDuplicates($array1)
{
    $counted = array_count_values($array1);
    $dupes = [];
    $keys = array_keys($counted);
    foreach ($keys as $key)
    {
        if ($counted[$key] > 1)
        {$dupes[] = $key;}
    }
    sort($dupes);
    return $dupes;
}
$array1 = [2, 4, 5, 2, 3, 4];
$dupes = findDuplicates($array1);
print_r($dupes);
?>