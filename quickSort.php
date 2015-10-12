<?php

namespace sortingAlgos;

class QuickSort
{
    protected $arrayLength;

    protected $leftValues = array();

    protected $rightValues = array();

    protected $selectedValue;

    protected $selectedKey;

    private function getLength($array)
    {
        return $this->arrayLength = count($array);
    }
    private function resetArray($array)
    {
        return reset($array);
    }
    private function getKey($array)
    {
        return key($array);
    }
    private function removeElement($array)
    {
        return array_shift($array);
    }
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
$arrayInteger = array(2,5,1,6,7);
$quickSort = new QuickSort();
$sortedArray = $quickSort->sort($arrayInteger);
print_r($sortedArray);
exit;
