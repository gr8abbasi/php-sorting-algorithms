<?php
function quicksort( $array  ) {
    if( count( $array  ) < 2  ) {
        return $array;
    }
    $left = $right = array(  );
    reset( $array  );
    $pivot_key  = key( $array  );
    $pivot  = array_shift( $array  );
    foreach( $array as $k => $v  ) {
        if( $v < $pivot  )
            $left[$k] = $v;
        else
            $right[$k] = $v;

    }
    return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));

}

// Using quicksort()
$array = array(2,5,1,6,7);
$sortedArray  = quicksort( $array  );    //returns sorted array.
print_r($sortedArray);
