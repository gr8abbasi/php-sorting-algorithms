<?php

spl_autoload_register(
    function ($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'Sorting\\AbstractSorting'      => '/src/Sorting/AbstractSorting.php',
                'Sorting\\QuickSort\\QuickSort' => '/src/Sorting/QuickSort/QuickSort.php',
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$class])) {
            require __DIR__ . $classes[$class];
        }
    },
    true,
    false
);
