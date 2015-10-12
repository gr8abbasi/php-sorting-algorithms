<?php

namespace sortingAlgos;

ini_set('xdebug.max_nesting_level', 50000);

class QuickSort
{
    protected $unsortedArray;

    protected $arrayLength;

    protected $leftValues = array();

    protected $rightValues = array();

    protected $selectedValue;

    protected $selectedKey;

    public function __construct(array $unsortedArray)
    {
        $this->unsortedArray = $unsortedArray;
        $this->sort($this->unsortedArray);
    }
    public function getLength()
    {
        return $this->arrayLength = count($this->unsortedArray);
    }
    public function getLeftValues()
    {
        return $this->leftValues;
    }
    public function getRightValues()
    {
        return $this->rightValues;
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
    private function sort($unsortedArray)
    {
        if ($this->getLength() < 2) {
            return $unsortedArray;
        } else {
            $this->resetArray($unsortedArray);
            $this->selectedKey = $this->getKey($unsortedArray);
            $this->selectedValue = $this->removeElement($unsortedArray);
            foreach ($unsortedArray as $key => $value) {
                if ($this->selectedValue > $value) {
                    $this->leftValues[$key] = $value;
                } else {
                    $this->rightValues[$key] = $value;
                }
            }
  //          print_r($this->rightValues);
 //           die();
            return(array_merge($this->sort($this->leftValues), array($this->selectedKey => $this->selectedValue), $this->sort($this->rightValues)));
        }
    }
}
$arrayInteger = array(2,5,1,6,7);
$sortedArray = new QuickSort($arrayInteger);
print_r($sortedArray);
exit;
