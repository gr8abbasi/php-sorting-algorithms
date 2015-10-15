<?php

namespace Sorting\QuickSort;

/**
 * Sorting\QuickSort\QuickSort
 */
class QuickSort
{
    /**
     * @var \Sorting\QuickSort
     */
    protected $arrayLength;

    /**
     * @param array $array
     *
     * @return int
     */
    private function getLength($array)
    {
        return $this->arrayLength = count($array);
    }

    /**
     * @param array $array
     *
     * @return array
     */
    private function resetArray($array)
    {
        return reset($array);
    }

    /**
     * @param array $array
     *
     * @return string
     */
    private function getKey($array)
    {
        return key($array);
    }

    /**
     *  @param array $unsortedArray
     *
     *  @return array
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

$arrayInteger = array(8,10,5,6,4,1,2,7,9,12,15);
$quickSort = new QuickSort();
$sortedArray = $quickSort->sort($arrayInteger);
print_r($sortedArray);
