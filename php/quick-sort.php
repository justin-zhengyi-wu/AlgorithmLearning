<?php

function quick_sort($array) {
	if (count($array) <= 1) return $array;
    $pivot_index = floor(count($array) / 2);
    $pivot = array_splice($array, $pivot_index, 1)[0];
	$left_arr = array();
	$right_arr = array();
	for ($i=0; $i< count($array); $i++){
        if ($array[$i] < $pivot)
            $left_arr[] = $array[$i];
        else
            $right_arr[] = $array[$i];
	}
    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);
    return array_merge($left_arr, array($pivot), $right_arr);
}

$ret = quick_sort([3,5,1,7,100,2,9]);
var_dump($ret);