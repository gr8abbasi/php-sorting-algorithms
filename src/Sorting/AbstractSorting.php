<?php

namespace Sorting;

/**
 * Sorting\AbstractSorting
 */
abstract class AbstractSorting
{
    /**
     * @var \Sorting\AbstractSorting
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
    abstract public function sort($unsortedArray);
}
