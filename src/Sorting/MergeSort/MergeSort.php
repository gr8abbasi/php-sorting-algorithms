<?php

namespace Sorting\MergeSort;

use Sorting\AbstractSorting;

/**
 * Sorting\MergeSort\MergeSort
 */
class MergeSort extends AbstractSorting
{
    /**
     * {@inheritdoc}
     */
    public function sort($unsortedArray)
    {
        if ($this->getLength($unsortedArray) < 2) {
            return $unsortedArray;
        } else {
            $leftValues = array();
            $rightValues = array();

            $midValue = round($this->getLength($unsortedArray)/2);

            foreach ($unsortedArray as $key => $value) {
                if ($unsortedArray[$midValue] > $value) {
                    $leftValues[$key] = $value;
                } else {
                    $rightValues[$key] = $value;
                }
            }
            print_r($leftValues);
            print_r($rightValues);
            $this->sort($leftValues);
            $this->sort($rightValues);
            // exit;
            // return array_merge($this->sort($leftValues), array($selectedKey => $selectedValue), $this->sort($rightValues));
        }
    }
    /**
        *  Divide the array into smallest elements
        *
        *  @param array $array
        *  @return array $result
     */
    // private function divide($array)
    // {
    //     if($this->getLength($array) < 2){
    //         return $array;
    //     }else{
    //         $left = $right = array();
    //         while(){
    //
    //         }
    //     }
    // }
}
