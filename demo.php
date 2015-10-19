<?php

require_once("autoload.php");

use Sorting\QuickSort\QuickSort;

$arrayInteger = array(8,10,5,6,4,1,2,7,9,12,15);
$quickSort = new QuickSort();
$sortedArray = $quickSort->sort($arrayInteger);
print_r($sortedArray);
