<?php
function binarySearch($key, array $array)
{
    
    $lo = 0;
    $hi = count($array) - 1;

    while($lo <= $hi)
    {

        $mid = floor($lo + ($hi - $lo) / 2);

        if ($key < $array[$mid]) 
        {
            $hi = $mid - 1;
        } else if ($key > $array[$mid]) 
        { 
            $lo = $mid + 1;
        } else {
            return $mid;
        }

    }

    return -1;
    
}
