<?php

namespace Sorting;

/**
 * Sorting\AbstractSorting
 */
abstract class AbstractSorting
{
    /**
     * @var int \Sorting\AbstractSorting
     */
    protected $arrayLength;

    /**
     * @param array $array
     *
     * @return int
     */
    protected function getLength($array)
    {
        return $this->arrayLength = count($array);
    }

    /**
     * @param array $array
     *
     * @return array
     */
    protected function resetArray($array)
    {
        return reset($array);
    }

    /**
     * @param array $array
     *
     * @return string
     */
    protected function getKey($array)
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
