<?php

require_once("autoload.php");

use Sorting\QuickSort\QuickSort;
use Sorting\MergeSort\MergeSort;

$arrayInteger = array(8,10,5,6,4,1,2,7,9,12,15);
// $quickSort = new QuickSort();
// $sortedArray = $quickSort->sort($arrayInteger);
$mergeSort = new MergeSort();
$sortedArray = $mergeSort->sort($arrayInteger);
// print_r($sortedArray);
