<?php

/**
 * @param $array1
 * @param $array2
 *
 * @return array
 */
function intersectArray($array1, $array2)
{
    $intersectedArray = array();
    // print_r($array2);
    // exit;
    $i = 0;
    $j = 0;

    while ($i <= count($array1) && $j <= count($array2)) {
        if ($array1[$i] < $array2[$j]) {
            ++$i;
        } elseif ($array2[$j] < $array1[$i]) {
            ++$j;
        } elseif ($array1[$i] == $array2[$j]) {
            $intersectedArray[] = $array2[$j];
            ++$i;
            ++$j;
        }
    }
    return $intersectedArray;
}
function removeDuplicate($array)
{
    $newArray = array();
    foreach ($array as $key => $value) {
        $newArray[$value] = $value;
    }
    return $newArray;
}
$array1 = array(5,6,4,1,2,2);
$array2 = array(1,2,3,2,3,4,5);
$intersectedArray = intersectArray(removeDuplicate($array1), removeDuplicate($array2));
print_r($intersectedArray);
