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
            $this->resetArray($unsortedArray);
            $selectedKey = $this->getKey($unsortedArray);
            $selectedValue = array_shift($unsortedArray);

            foreach ($unsortedArray as $key => $value) {
                if ($selectedValue > $value) {
                    $leftValues[$key] = $value;
                } else {
                    $rightValues[$key] = $value;
                }
            }
            return array_merge($this->sort($leftValues), array($selectedKey => $selectedValue), $this->sort($rightValues));
        }
    }
}
