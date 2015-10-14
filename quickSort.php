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
     * @var \Sorting\QuickSort
     */
    protected $leftValues = array();

    /**
     * @var \Sorting\QuickSort
     */
    protected $rightValues = array();

    /**
     * @var \Sorting\QuickSort
     */
    protected $selectedValue;

    /**
     * @var \Sorting\QuickSort
     */
    protected $selectedKey;

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
            $this->leftValues = array();
            $this->rightValues = array();
            $this->resetArray($unsortedArray);
            $this->selectedKey = $this->getKey($unsortedArray);
            $this->selectedValue = array_shift($unsortedArray);

            foreach ($unsortedArray as $key => $value) {
                if ($this->selectedValue > $value) {
                    $this->leftValues[$key] = $value;
                } else {
                    $this->rightValues[$key] = $value;
                }
            }

            return array_merge($this->sort($this->leftValues), array($this->selectedKey => $this->selectedValue), $this->sort($this->rightValues));
        }
    }
}
$arrayInteger = array(5,6,4,1,2);
$quickSort = new QuickSort();
$sortedArray = $quickSort->sort($arrayInteger);
print_r($sortedArray);
exit;
