<?php

function intersectArray($array1, $array2)
{
    $intersectedArray = array();
    $array1 = removeDuplicate($array1);
    $array2 = removeDuplicate($array2);

    $i = 0;
    $j = 0;

    // print_r($array1);exit;
    while ($i < count($array1) && $j < count($array2)) {
        if ($array1[$i] < $array2[$j]) {
            $i++;
        } elseif ($array2[$j] < $array1[$i]) {
            $j++;
        } elseif ($array2[$j] == $array1[$i]) {
            // print_r($array2[$j++]);
            // die("Died Here!");
            $intersectedArray[] = $array2[$j];
            $i++;
            $j++;
        }
    }
    print_r($intersectedArray);
}
function removeDuplicate($array)
{
    $newArray = array();
    foreach ($array as $key => $value) {
        $newArray[$value] = $value;
    }
    return($newArray);
}

$array1 = array(1,2,3,4,5,3,2);
$array2 = array(2,3,5,7,3,2);
intersectArray($array1, $array2);
