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
    sort($array1);
    sort($array2);

    $i = 0;
    $j = 0;
    /** Loop both arrays until till end **/
    while ($i < count($array1) && $j < count($array2)) {
    /** if value in array1 is less than array2 increment i **/
        if ($array1[$i] < $array2[$j]) {
            ++$i;
    /** if value in array2 is less than array1 increment j **/
        } elseif ($array2[$j] < $array1[$i]) {
            ++$j;
    /** if value in array1 is equal to array2 save in new array and increment i and j **/
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

$array1 = array(5,6,4,1,2,2);
$array2 = array(1,2,3,2,3,4,5);
$intersectedArray = intersectArray(removeDuplicate($array1), removeDuplicate($array2));
print_r($intersectedArray);
