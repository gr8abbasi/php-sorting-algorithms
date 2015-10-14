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

    $i = 0;
    $j = 0;
    /* Loop both arrays until till end **/
    while ($i < count($array1) && $j < count($array2)) {
        /* if value in array1 is less than array2 increment i **/
        if ($array1[$i] < $array2[$j]) {
            ++$i;
    /* if value in array2 is less than array1 increment j **/
        } elseif ($array2[$j] < $array1[$i]) {
            ++$j;
    /* if value in array1 is equal to array2 save in new array and increment i and j **/
        } elseif ($array1[$i] == $array2[$j]) {
            $intersectedArray[] = $array2[$j];
            ++$i;
            ++$j;
        }
    }
    return $intersectedArray;
}

/**
 * @param $array
 *
 * @return array
 */
function removeDuplicate($array)
{
    $newArray = array();
    foreach ($array as $key => $value) {
        $newArray[$value] = $value;
    }
    return $newArray;
}

/**
 * @param $array
 *
 * @return array
 */
function quicksort($array)
{
    if (count($array) < 2) {
        return $array;
    }
    $left = $right = array();
    reset($array);
    $pivot_key = key($array);
    $pivot = array_shift($array);
    foreach ($array as $k => $v) {
        if ($v < $pivot) {
            $left[$k] = $v;
        } else {
            $right[$k] = $v;
        }
    }
    return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
}

$array1 = array(5,6,4,1,2,2);
$array2 = array(1,2,3,2,3,4,5);

$array1 = removeDuplicate($array1);
$array2 = removeDuplicate($array2);

$array1 = quicksort($array1);
$array2 = quicksort($array2);

$intersectedArray = intersectArray($array1, $array2);
print_r($intersectedArray);
